let currentInstance;
let counterInterval;

// Currency symbols mapping
const currencySymbols = {
	EUR: "€",
	USD: "$",
	GBP: "£",
	JPY: "¥",
	CAD: "C$",
	AUD: "A$",
	CHF: "CHF",
	CNY: "¥",
	SEK: "kr",
	NOK: "kr",
	DKK: "kr",
	PLN: "zł",
	CZK: "Kč",
	HUF: "Ft",
	RON: "lei",
	BGN: "лв",
	HRK: "kn",
	RSD: "дин",
	TRY: "₺",
	RUB: "₽",
	UAH: "₴",
	INR: "₹",
	BRL: "R$",
	MXN: "$",
	ARS: "$",
	CLP: "$",
	COP: "$",
	PEN: "S/",
	UYU: "$",
	ZAR: "R",
	KES: "KSh",
	NGN: "₦",
	EGP: "£",
	MAD: "DH",
	TND: "DT",
	KRW: "₩",
	THB: "฿",
	VND: "₫",
	IDR: "Rp",
	MYR: "RM",
	SGD: "S$",
	PHP: "₱",
	HKD: "HK$",
	TWD: "NT$",
	NZD: "NZ$",
	ILS: "₪",
	AED: "AED",
	SAR: "SR",
	QAR: "QR",
	KWD: "KD",
	BHD: "BD",
	OMR: "OMR",
	JOD: "JD",
	LBP: "LL",
};

function getCurrencySymbol() {
	const currency = document.getElementById("currency").value;
	return currencySymbols[currency] || currency;
}

function calculate() {
	const income = parseFloat(document.getElementById("income").value);
	const hours = parseFloat(document.getElementById("hours").value);
	const salaryPeriod = document.getElementById("salary-period").value;
	const timePeriod = document.getElementById("time-period").value;
	const outputPeriod = document.getElementById("output-period").value;
	const currencySymbol = getCurrencySymbol();
	const chatOutput = document.getElementById("chat-output");
	const liveCounter = document.getElementById("live-counter");

	if (!income || !hours || hours === 0) {
		chatOutput.innerHTML = `<span class="text-red-600">${window.translations.enter_valid_numbers}</span>`;
		liveCounter.innerHTML = "";
		clearInterval(counterInterval);
		return;
	}

	if (currentInstance) {
		currentInstance.destroy();
	}
	clearInterval(counterInterval);

	// Convert salary to annual amount
	let annualIncome = income;
	if (salaryPeriod === "monthly") {
		annualIncome = income * 12;
	} else if (salaryPeriod === "hourly") {
		// For hourly, we need to calculate based on working hours
		let weeklyHours = hours;
		if (timePeriod === "daily") {
			weeklyHours = hours * 5; // Assuming 5 working days per week
		} else if (timePeriod === "monthly") {
			weeklyHours = hours / 4.33; // Average weeks per month
		}
		annualIncome = income * weeklyHours * 52;
	}

	// Convert working hours to weekly hours
	let weeklyHours = hours;
	if (timePeriod === "daily") {
		weeklyHours = hours * 5; // Assuming 5 working days per week
	} else if (timePeriod === "monthly") {
		weeklyHours = hours / 4.33; // Average weeks per month
	}

	// Calculate earnings based on output period
	let earnings;
	let periodText;
	let liveCounterMultiplier;

	switch (outputPeriod) {
		case "second":
			const secondsPerYear = weeklyHours * 52 * 3600;
			earnings = annualIncome / secondsPerYear;
			periodText = window.translations.second;
			liveCounterMultiplier = 1;
			break;
		case "minute":
			const minutesPerYear = weeklyHours * 52 * 60;
			earnings = annualIncome / minutesPerYear;
			periodText = window.translations.minute;
			liveCounterMultiplier = 60;
			break;
		case "hourly":
			const hoursPerYear = weeklyHours * 52;
			earnings = annualIncome / hoursPerYear;
			periodText = window.translations.hourly;
			liveCounterMultiplier = 3600; // 1 hour = 3600 seconds
			break;
		case "annual":
			earnings = annualIncome;
			periodText = window.translations.annual;
			liveCounterMultiplier = 365.25 * 24 * 60 * 60; // 1 year in seconds
			break;
		case "daily":
			const daysPerYear = 365.25;
			earnings = annualIncome / daysPerYear;
			periodText = window.translations.day;
			liveCounterMultiplier = 24 * 60 * 60;
			break;
		case "weekly":
			earnings = annualIncome / 52;
			periodText = window.translations.week;
			liveCounterMultiplier = 7 * 24 * 60 * 60;
			break;
		case "biweekly":
			earnings = annualIncome / 26;
			periodText = window.translations.biweek;
			liveCounterMultiplier = 14 * 24 * 60 * 60;
			break;
		case "monthly":
			earnings = annualIncome / 12;
			periodText = window.translations.month;
			liveCounterMultiplier = 30.44 * 24 * 60 * 60; // Average month length
			break;
		default:
			const defaultSecondsPerYear = weeklyHours * 52 * 3600;
			earnings = annualIncome / defaultSecondsPerYear;
			periodText = window.translations.second;
			liveCounterMultiplier = 1;
	}

	const formatted = earnings.toFixed(6);

	// Create descriptive text based on inputs
	const salaryText =
		salaryPeriod === "annual"
			? window.translations.annually
			: salaryPeriod === "monthly"
			? window.translations.per_month
			: window.translations.per_hour;
	const timeText =
		timePeriod === "weekly"
			? window.translations.per_week
			: timePeriod === "daily"
			? window.translations.per_day
			: window.translations.per_month;

	chatOutput.innerHTML = "";
	liveCounter.innerHTML = "";

	currentInstance = new window.TypeIt("#chat-output", {
		strings: [
			`${window.translations.calculating} ${periodText}...`,
			`${
				window.translations.based_on
			} ${currencySymbol}${income.toLocaleString()} ${salaryText} ${
				window.translations.and
			} ${hours} ${window.translations.hours} ${timeText}...`,
			`${window.translations.you_earn} ${currencySymbol}${formatted} ${window.translations.per} ${periodText}.`,
		],
		speed: 15,
		lifeLike: true,
		waitUntilVisible: true,
		breakLines: true,
		afterComplete: () => {
			let totalEarned = 0;
			let secondsElapsed = 0;
			// Calculate earnings per second for live counter (always per second regardless of display period)
			const earningsPerSecond = annualIncome / (weeklyHours * 52 * 3600);
			counterInterval = setInterval(() => {
				secondsElapsed++;
				totalEarned = secondsElapsed * earningsPerSecond;
				liveCounter.textContent = `${
					window.translations.youve_earned
				} ${currencySymbol}${totalEarned.toFixed(4)} ${
					window.translations.since_clicking
				}`;
			}, 1000);
		},
	}).go();
}

function setFamousSalary(income, hours) {
	document.getElementById("income").value = income;
	document.getElementById("hours").value = hours;
	document.getElementById("currency").value = "EUR";
	document.getElementById("salary-period").value = "annual";
	document.getElementById("time-period").value = "weekly";
	document.getElementById("output-period").value = "second";
	calculate();
	// Scroll to top smoothly
	window.scrollTo({
		top: 0,
		behavior: "smooth",
	});
}

window.addEventListener("DOMContentLoaded", () => {
	currentInstance = new window.TypeIt("#chat-output", {
		strings: [window.translations.welcome_message],
		speed: 15,
		lifeLike: true,
		waitUntilVisible: true,
		afterComplete: () => {
			document.getElementById("income").focus();
		},
	}).go();

	document.getElementById("year").textContent = new Date().getFullYear();
});

function toggleTheme() {
	const body = document.body;
	body.classList.toggle("dark");
	body.classList.toggle("light");
}

function toggleMobileMenu() {
	const hamburger = document.querySelector(".hamburger");
	const mobileMenu = document.getElementById("mobileMenu");

	hamburger.classList.toggle("active");
	mobileMenu.classList.toggle("active");
}

// Close mobile menu when clicking on a link
document.addEventListener("DOMContentLoaded", function () {
	const mobileMenuLinks = document.querySelectorAll(".mobile-menu a");
	mobileMenuLinks.forEach((link) => {
		link.addEventListener("click", function () {
			if (this.getAttribute("href") !== "#") {
				toggleMobileMenu();
			}
		});
	});
});
