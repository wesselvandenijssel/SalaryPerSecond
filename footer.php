<footer>
	<div>
		<p>
			Created by Wessel van den IJssel &mdash;
			<span id="year"></span>
		</p>
		<p class="mt-2">
			<a href="mailto:info@wesselvandenijssel.nl" aria-label="Email contact">Email</a>
			|
			<a href="https://www.linkedin.com/in/wessel-van-den-ijssel/" target="_blank" rel="noopener"
				aria-label="LinkedIn profile">LinkedIn</a>
			|
			<a href="https://github.com/wesselvdijssel" target="_blank" rel="noopener"
				aria-label="GitHub profile">GitHub</a>
		</p>
	</div>
</footer>

<script>
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
		const income = parseFloat(
			document.getElementById("income").value
		);
		const hours = parseFloat(
			document.getElementById("hours").value
		);
		const salaryPeriod =
			document.getElementById("salary-period").value;
		const timePeriod = document.getElementById("time-period").value;
		const outputPeriod =
			document.getElementById("output-period").value;
		const currencySymbol = getCurrencySymbol();
		const chatOutput = document.getElementById("chat-output");
		const liveCounter = document.getElementById("live-counter");

		if (!income || !hours || hours === 0) {
			chatOutput.innerHTML =
				'<span class="text-red-600">Please enter valid numbers.</span>';
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
				periodText = "second";
				liveCounterMultiplier = 1;
				break;
			case "minute":
				const minutesPerYear = weeklyHours * 52 * 60;
				earnings = annualIncome / minutesPerYear;
				periodText = "minute";
				liveCounterMultiplier = 60;
				break;
			case "daily":
				const daysPerYear = 365.25;
				earnings = annualIncome / daysPerYear;
				periodText = "day";
				liveCounterMultiplier = 24 * 60 * 60;
				break;
			case "weekly":
				earnings = annualIncome / 52;
				periodText = "week";
				liveCounterMultiplier = 7 * 24 * 60 * 60;
				break;
			case "biweekly":
				earnings = annualIncome / 26;
				periodText = "biweek";
				liveCounterMultiplier = 14 * 24 * 60 * 60;
				break;
			case "monthly":
				earnings = annualIncome / 12;
				periodText = "month";
				liveCounterMultiplier = 30.44 * 24 * 60 * 60; // Average month length
				break;
			default:
				const defaultSecondsPerYear = weeklyHours * 52 * 3600;
				earnings = annualIncome / defaultSecondsPerYear;
				periodText = "second";
				liveCounterMultiplier = 1;
		}

		const formatted = earnings.toFixed(6);

		// Create descriptive text based on inputs
		const salaryText =
			salaryPeriod === "annual" ?
			"annually" :
			salaryPeriod === "monthly" ?
			"per month" :
			"per hour";
		const timeText =
			timePeriod === "weekly" ?
			"per week" :
			timePeriod === "daily" ?
			"per day" :
			"per month";

		chatOutput.innerHTML = "";
		liveCounter.innerHTML = "";

		currentInstance = new window.TypeIt("#chat-output", {
			strings: [
				`Calculating your salary per ${periodText}...`,
				`Based on ${currencySymbol}${income.toLocaleString()} ${salaryText} and ${hours} hours ${timeText}...`,
				`You earn ${currencySymbol}${formatted} per ${periodText}.`,
			],
			speed: 15,
			lifeLike: true,
			waitUntilVisible: true,
			breakLines: true,
			afterComplete: () => {
				let totalEarned = 0;
				let secondsElapsed = 0;
				counterInterval = setInterval(() => {
					secondsElapsed++;
					totalEarned =
						(secondsElapsed / liveCounterMultiplier) *
						earnings;
					liveCounter.textContent = `You've earned ${currencySymbol}${totalEarned.toFixed(
								4
							)} since clicking Calculate.`;
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
			behavior: "smooth"
		});
	}

	window.addEventListener("DOMContentLoaded", () => {
		currentInstance = new window.TypeIt("#chat-output", {
			strings: [
				"Hi there! Let's calculate your salary per second.",
			],
			speed: 15,
			lifeLike: true,
			waitUntilVisible: true,
			afterComplete: () => {
				document.getElementById("income").focus();
			},
		}).go();

		document.getElementById("year").textContent =
			new Date().getFullYear();
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
	document.addEventListener("DOMContentLoaded", function() {
		const mobileMenuLinks =
			document.querySelectorAll(".mobile-menu a");
		mobileMenuLinks.forEach((link) => {
			link.addEventListener("click", function() {
				if (this.getAttribute("href") !== "#") {
					toggleMobileMenu();
				}
			});
		});
	});
</script>
</body>

</html>