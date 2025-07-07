<?php include 'header.php'; ?>

<main class="chat-box">
	<section id="calculator">
		<div class="message">
			<div id="chat-output" class="font-mono text-green-600"></div>
			<div id="live-counter" class="font-mono text-blue-600 mt-2"></div>
		</div>
		<div class="input-area">
			<div class="flex flex-col sm:flex-row gap-4 w-full">
				<div class="flex-1">
					<label class="block text-sm font-medium mb-1 text-theme">Salary Amount</label>
					<input id="income" type="number" placeholder="Enter salary amount" class="w-full" min="0" />
				</div>
				<div class="flex-1">
					<label class="block text-sm font-medium mb-1 text-theme">Salary Period</label>
					<select id="salary-period" class="w-full">
						<option value="annual">Per Year</option>
						<option value="monthly">Per Month</option>
						<option value="hourly">Per Hour</option>
					</select>
				</div>
			</div>
			<div class="flex flex-col sm:flex-row gap-4 w-full mt-4">
				<div class="flex-1">
					<label class="block text-sm font-medium mb-1 text-theme">Working Hours</label>
					<input id="hours" type="number" placeholder="Enter working hours" class="w-full" min="0" />
				</div>
				<div class="flex-1">
					<label class="block text-sm font-medium mb-1 text-theme">Time Period</label>
					<select id="time-period" class="w-full">
						<option value="weekly">Per Week</option>
						<option value="daily">Per Day</option>
						<option value="monthly">Per Month</option>
					</select>
				</div>
			</div>
			<div class="flex flex-col sm:flex-row gap-4 w-full mt-4">
				<div class="flex-1">
					<label class="block text-sm font-medium mb-1 text-theme">Currency</label>
					<select id="currency" class="w-full">
						<option value="EUR">€ Euro</option>
						<option value="USD">$ US Dollar</option>
						<option value="GBP">£ British Pound</option>
						<option value="JPY">¥ Japanese Yen</option>
						<option value="CAD">C$ Canadian Dollar</option>
						<option value="AUD">
							A$ Australian Dollar
						</option>
						<option value="CHF">CHF Swiss Franc</option>
						<option value="CNY">¥ Chinese Yuan</option>
						<option value="SEK">kr Swedish Krona</option>
						<option value="NOK">kr Norwegian Krone</option>
						<option value="DKK">kr Danish Krone</option>
						<option value="PLN">zł Polish Zloty</option>
						<option value="CZK">Kč Czech Koruna</option>
						<option value="HUF">Ft Hungarian Forint</option>
						<option value="RON">lei Romanian Leu</option>
						<option value="BGN">лв Bulgarian Lev</option>
						<option value="HRK">kn Croatian Kuna</option>
						<option value="RSD">дин Serbian Dinar</option>
						<option value="TRY">₺ Turkish Lira</option>
						<option value="RUB">₽ Russian Ruble</option>
						<option value="UAH">₴ Ukrainian Hryvnia</option>
						<option value="INR">₹ Indian Rupee</option>
						<option value="BRL">R$ Brazilian Real</option>
						<option value="MXN">$ Mexican Peso</option>
						<option value="ARS">$ Argentine Peso</option>
						<option value="CLP">$ Chilean Peso</option>
						<option value="COP">$ Colombian Peso</option>
						<option value="PEN">S/ Peruvian Sol</option>
						<option value="UYU">$ Uruguayan Peso</option>
						<option value="ZAR">
							R South African Rand
						</option>
						<option value="KES">KSh Kenyan Shilling</option>
						<option value="NGN">₦ Nigerian Naira</option>
						<option value="EGP">£ Egyptian Pound</option>
						<option value="MAD">DH Moroccan Dirham</option>
						<option value="TND">DT Tunisian Dinar</option>
						<option value="KRW">₩ South Korean Won</option>
						<option value="THB">฿ Thai Baht</option>
						<option value="VND">₫ Vietnamese Dong</option>
						<option value="IDR">
							Rp Indonesian Rupiah
						</option>
						<option value="MYR">
							RM Malaysian Ringgit
						</option>
						<option value="SGD">S$ Singapore Dollar</option>
						<option value="PHP">₱ Philippine Peso</option>
						<option value="HKD">
							HK$ Hong Kong Dollar
						</option>
						<option value="TWD">NT$ Taiwan Dollar</option>
						<option value="NZD">
							NZ$ New Zealand Dollar
						</option>
						<option value="ILS">₪ Israeli Shekel</option>
						<option value="AED">AED UAE Dirham</option>
						<option value="SAR">SR Saudi Riyal</option>
						<option value="QAR">QR Qatari Riyal</option>
						<option value="KWD">KD Kuwaiti Dinar</option>
						<option value="BHD">BD Bahraini Dinar</option>
						<option value="OMR">OMR Omani Rial</option>
						<option value="JOD">JD Jordanian Dinar</option>
						<option value="LBP">LL Lebanese Pound</option>
					</select>
				</div>
				<div class="flex-1">
					<label class="block text-sm font-medium mb-1 text-theme">Show Results As</label>
					<select id="output-period" class="w-full">
						<option value="second">Per Second</option>
						<option value="minute">Per Minute</option>
						<option value="daily">Per Day</option>
						<option value="weekly">Per Week</option>
						<option value="biweekly">Per Biweek</option>
						<option value="monthly">Per Month</option>
					</select>
				</div>
			</div>
			<button onclick="calculate()"
				class="w-full sm:w-auto mt-4 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
				Calculate
			</button>
		</div>
		<p class="mt-4 text-sm text-gray-600 text-center text-theme">
			Calculate your earnings in any time period you prefer - from
			seconds to months. Choose your salary format, working hours,
			currency, and output period for personalized results.
		</p>
	</section>

	<section id="features" class="mt-16">
		<h2 class="text-3xl font-bold mb-6 text-center">
			🚀 Powerful Salary Calculator Features
		</h2>
		<p class="text-lg text-gray-600 dark:text-gray-300 mb-8 text-center max-w-3xl mx-auto text-theme">
			Our advanced salary calculator offers comprehensive tools
			for accurate earnings analysis across multiple time periods
			and currencies.
		</p>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					💰 Multiple Salary Input Formats
				</h3>
				<p class="text-sm text-gray-600 dark:text-gray-300">
					Input your salary as annual, monthly, or hourly
					rates with flexible working hour periods for
					accurate calculations tailored to your employment
					type.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					🌍 Global Currency Support (50+ Currencies)
				</h3>
				<p class="text-sm text-gray-600 dark:text-gray-300">
					Calculate in 50+ currencies including EUR, USD, GBP,
					JPY, and many more with real-time conversion support
					for international users.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					⏱️ Real-Time Earnings Counter
				</h3>
				<p class="text-sm text-gray-600 dark:text-gray-300">
					Watch your earnings accumulate in real-time with our
					live counter feature that updates every second for
					immediate salary visualization.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					🎯 Flexible Output Time Periods
				</h3>
				<p class="text-sm text-gray-600 dark:text-gray-300">
					View results per second, minute, day, week, biweek,
					or month to match your financial planning needs and
					budgeting preferences.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					🌟 Celebrity & CEO Salary Comparisons
				</h3>
				<p class="text-sm text-gray-600 dark:text-gray-300">
					Compare with CEO salaries and industry benchmarks
					for perspective on earnings and career goal setting
					with real market data.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					🔒 Privacy-First Design
				</h3>
				<p class="text-sm text-gray-600 dark:text-gray-300">
					All calculations happen locally in your browser. No
					data is stored, transmitted, or tracked anywhere for
					complete privacy protection.
				</p>
			</div>
		</div>
	</section>

	<section id="use-cases" class="mt-16">
		<h2 class="text-3xl font-bold mb-6 text-theme text-center">
			💼 Professional Use Cases & Applications
		</h2>
		<p class="text-lg text-gray-600 dark:text-gray-300 mb-8 text-center max-w-3xl mx-auto text-theme">
			Discover how professionals, freelancers, and job seekers use
			our salary calculator for career advancement and financial
			planning.
		</p>
		<div class="space-y-6">
			<div class="border-l-4 border-blue-500 pl-6 bg-blue-50 dark:bg-blue-900 p-4 rounded-r-lg">
				<h3 class="font-semibold text-theme mb-3 text-lg">
					💼 Salary Negotiation & Compensation Planning
				</h3>
				<p class="text-gray-700 dark:text-gray-300 text-theme">
					Understand your true hourly value to negotiate
					better compensation packages, justify raises, and
					make informed career decisions with concrete data.
				</p>
			</div>
			<div class="border-l-4 border-green-500 pl-6 bg-green-50 dark:bg-green-900 p-4 rounded-r-lg">
				<h3 class="font-semibold text-theme mb-3 text-lg">
					📊 Personal Financial Planning & Budgeting
				</h3>
				<p class="text-gray-700 dark:text-gray-300 text-theme">
					Break down your earnings into different time periods
					for better budgeting, savings goals, and long-term
					financial planning strategies.
				</p>
			</div>
			<div class="border-l-4 border-purple-500 pl-6 bg-purple-50 dark:bg-purple-900 p-4 rounded-r-lg">
				<h3 class="font-semibold text-theme mb-3 text-lg">
					🚀 Productivity & Work Motivation
				</h3>
				<p class="text-gray-700 dark:text-gray-300 text-theme">
					Watch your real-time earnings to stay motivated
					during work sessions, meetings, and long projects
					with visual progress tracking.
				</p>
			</div>
			<div class="border-l-4 border-orange-500 pl-6 bg-orange-50 dark:bg-orange-900 p-4 rounded-r-lg">
				<h3 class="font-semibold text-theme mb-3 text-lg">
					🔍 Job Offer & Career Path Comparison
				</h3>
				<p class="text-gray-700 dark:text-gray-300 text-theme">
					Compare different job offers and career paths by
					understanding their true hourly value and total
					compensation packages.
				</p>
			</div>
			<div class="border-l-4 border-red-500 pl-6 bg-red-50 dark:bg-red-900 p-4 rounded-r-lg">
				<h3 class="font-semibold text-theme mb-3 text-lg">
					💡 Freelance & Contract Rate Setting
				</h3>
				<p class="text-gray-700 dark:text-gray-300 text-theme">
					Set competitive freelance rates and project pricing
					by understanding your target earnings per hour and
					time investment requirements.
				</p>
			</div>
		</div>
	</section>

	<section id="how-it-works" class="mt-16">
		<h2 class="text-xl font-semibold mb-4 text-theme">
			How It Works
		</h2>
		<p class="text-gray-700 mb-4 text-theme">
			This tool estimates your salary per second by calculating
			your total annual income divided by the number of seconds
			you work in a year. You can input your salary in different
			formats:
		</p>
		<ul class="list-disc list-inside text-gray-700 mb-4 text-theme">
			<li><strong>Annual:</strong> Your total yearly salary</li>
			<li>
				<strong>Monthly:</strong> Your monthly salary
				(multiplied by 12)
			</li>
			<li>
				<strong>Hourly:</strong> Your hourly rate (multiplied by
				total working hours)
			</li>
		</ul>
		<p class="text-gray-700 mb-4 text-theme">
			For working hours, you can specify:
		</p>
		<ul class="list-disc list-inside text-gray-700 text-theme">
			<li><strong>Weekly:</strong> Hours worked per week</li>
			<li>
				<strong>Daily:</strong> Hours worked per day (assumes 5
				working days)
			</li>
			<li>
				<strong>Monthly:</strong> Hours worked per month
				(converted to weekly)
			</li>
		</ul>
		<p class="text-gray-700 text-theme mt-4">
			The calculation converts everything to annual income based
			on your inputs, then divides by the appropriate time period
			to show your earnings per second, minute, day, week, biweek,
			or month - whatever you prefer to see.
		</p>
	</section>

	<section id="about" class="mt-16">
		<h2 class="text-xl font-semibold mb-4 text-theme">About</h2>
		<p class="text-gray-700 text-theme">
			This project is a minimal and interactive tool inspired by
			ChatGPT's typing style. It's designed to help you visualize
			how much you're earning in real-time. No data is stored or
			transmitted. All calculations are done in your browser.
		</p>
	</section>

	<section id="tips" class="mt-16">
		<h2 class="text-xl font-semibold mb-4 text-theme">
			Salary Tips
		</h2>
		<ul class="list-disc list-inside text-gray-700 text-theme space-y-2">
			<li>
				Consider how overtime or bonuses affect your hourly
				earnings.
			</li>
			<li>
				Use this tool to negotiate fair compensation based on
				your working hours.
			</li>
			<li>
				Track your real-time earnings during projects or
				freelance work.
			</li>
			<li>
				Remember to factor in taxes and benefits when evaluating
				salary.
			</li>
		</ul>
	</section>

	<section id="faq" class="mt-16">
		<h2 class="text-3xl font-bold mb-6 text-theme text-center">
			❓ Frequently Asked Questions
		</h2>
		<p class="text-lg text-gray-600 dark:text-gray-300 mb-8 text-center max-w-3xl mx-auto text-theme">
			Get answers to the most common questions about our salary
			calculator and how to use it effectively.
		</p>
		<div class="space-y-6 max-w-4xl mx-auto">
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					Is my salary data saved or shared with anyone?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					No. All calculations happen locally in your browser,
					ensuring complete privacy. No data is ever sent to
					our servers, stored, or shared with third parties.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					How accurate are the salary calculations?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					The calculations are mathematically precise based on
					your inputs. We convert everything to annual figures
					and divide by the appropriate time periods for
					accurate results across all supported currencies.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					Why does the real-time counter update every second?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					To give you a dynamic and real-time visualization of
					your earnings as time passes, regardless of your
					chosen output period. This helps with motivation and
					productivity tracking.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					Can I use this calculator for freelance or contract
					work?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					Absolutely! This tool is perfect for freelancers to
					understand their hourly value and set competitive
					rates. Use the hourly input format for the most
					accurate freelance calculations.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					Are taxes and benefits included in the calculations?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					No, all calculations are based on gross income. You
					should factor in taxes, benefits, and other
					deductions separately for net income calculations.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					What currencies are supported by the calculator?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					We support 50+ major global currencies including
					EUR, USD, GBP, JPY, and many regional currencies
					from Europe, Asia, Americas, Africa, and Oceania.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					How do I calculate my salary if I work irregular
					hours?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					For irregular hours, calculate your average weekly
					hours over a month or quarter and use that as your
					input. This will give you a more accurate
					representation of your earnings.
				</p>
			</div>
			<div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
				<h3 class="font-semibold text-gray-600 mb-3 text-lg">
					How can I report a bug or request a new feature?
				</h3>
				<p class="text-gray-700 dark:text-gray-300">
					Please email me at
					<a href="mailto:info@wesselvandenijssel.nl?subject=Salary Calculator Feedback"
						class="text-blue-600 dark:text-blue-400 hover:underline">info@wesselvandenijssel.nl</a>
					with your feedback, suggestions, or bug reports. We
					appreciate all user input!
				</p>
			</div>
		</div>
	</section>

	<section id="famous-salaries" class="mt-16">
		<h2 class="text-3xl font-bold mb-6 text-theme text-center">
			🌟 CEO & Celebrity Salary Benchmarks
		</h2>
		<p class="text-lg text-gray-600 dark:text-gray-300 mb-8 text-center max-w-3xl mx-auto text-theme">
			Compare your earnings with top executives and industry
			leaders. Click any salary to see their real-time earnings
			breakdown.
		</p>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			<button onclick="setFamousSalary(27110418, 40)"
				class="p-6 border-2 border-blue-200 dark:border-blue-700 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900 text-left shadow-md hover:shadow-lg transition-all">
				<div class="font-bold text-lg text-blue-600 dark:text-blue-400">
					Mark Zuckerberg
				</div>
				<div class="text-sm mt-1">CEO, Meta (Facebook)</div>
				<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
					€27.1M annually
				</div>
				<div class="text-xs text-gray-500 mt-1">
					Click to calculate per second
				</div>
			</button>
			<button onclick="setFamousSalary(39288458, 40)"
				class="p-6 border-2 border-purple-200 dark:border-purple-700 rounded-lg hover:bg-purple-50 dark:hover:bg-purple-900 text-left shadow-md hover:shadow-lg transition-all">
				<div class="font-bold text-lg text-purple-600 dark:text-purple-400">
					David Zaslav
				</div>
				<div class="text-sm mt-1">
					CEO, Warner Bros. Discovery
				</div>
				<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
					€39.3M annually
				</div>
				<div class="text-xs text-gray-500 mt-1">
					Click to calculate per second
				</div>
			</button>
			<button onclick="setFamousSalary(51073237, 40)"
				class="p-6 border-2 border-red-200 dark:border-red-700 rounded-lg hover:bg-red-50 dark:hover:bg-red-900 text-left shadow-md hover:shadow-lg transition-all">
				<div class="font-bold text-lg text-red-600 dark:text-red-400">
					Reed Hastings
				</div>
				<div class="text-sm mt-1">CEO, Netflix</div>
				<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
					€51.1M annually
				</div>
				<div class="text-xs text-gray-500 mt-1">
					Click to calculate per second
				</div>
			</button>
			<button onclick="setFamousSalary(54946310, 40)"
				class="p-6 border-2 border-indigo-200 dark:border-indigo-700 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900 text-left shadow-md hover:shadow-lg transition-all">
				<div class="font-bold text-lg text-indigo-600 dark:text-indigo-400">
					Satya Nadella
				</div>
				<div class="text-sm mt-1">CEO, Microsoft</div>
				<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
					€54.9M annually
				</div>
				<div class="text-xs text-gray-500 mt-1">
					Click to calculate per second
				</div>
			</button>
			<button onclick="setFamousSalary(99420097, 40)"
				class="p-6 border-2 border-yellow-200 dark:border-yellow-700 rounded-lg hover:bg-yellow-50 dark:hover:bg-yellow-900 text-left shadow-md hover:shadow-lg transition-all">
				<div class="font-bold text-lg text-yellow-600 dark:text-yellow-400">
					Tim Cook
				</div>
				<div class="text-sm mt-1">CEO, Apple Inc.</div>
				<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
					€99.4M annually
				</div>
				<div class="text-xs text-gray-500 mt-1">
					Click to calculate per second
				</div>
			</button>
			<button onclick="setFamousSalary(25000, 40)"
				class="p-6 border-2 border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 text-left shadow-md hover:shadow-lg transition-all">
				<div class="font-bold text-lg text-white-600 dark:text-white-400">
					EU Median Salary
				</div>
				<div class="text-sm mt-1">Average European Worker</div>
				<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
					€25K annually
				</div>
				<div class="text-xs text-gray-500 mt-1">
					Click to calculate per second
				</div>
			</button>
		</div>
		<div
			class="mt-8 p-4 bg-yellow-50 dark:bg-yellow-900 rounded-lg border border-yellow-200 dark:border-yellow-700">
			<p class="text-sm text-white-800">
				<strong>📊 Data Source:</strong> CEO compensation data
				from AFL-CIO PayWatch 2022 and SEC filings, converted to
				EUR. Calculations assume 40 hours/week, 52 weeks/year
				for comparison purposes. Individual results may vary
				based on actual working hours, stock options, and other
				compensation factors.
			</p>
		</div>
	</section>

	<section id="privacy" class="mt-16">
		<h2 class="text-xl font-semibold mb-4 text-theme">
			Privacy & Security
		</h2>
		<div class="bg-green-50 dark:bg-green-900 p-4 rounded-lg border border-green-200 dark:border-green-700">
			<h3 class="font-semibold text-white-800 mb-2">
				🔐 Your Data Stays Private
			</h3>
			<ul class="text-white-700 space-y-1 text-sm">
				<li>
					• All calculations are performed locally in your
					browser
				</li>
				<li>• No salary data is ever sent to our servers</li>
				<li>• No tracking or analytics cookies are used</li>
				<li>• No user accounts or registration required</li>
				<li>• Open-source and transparent calculations</li>
			</ul>
		</div>
	</section>

	<section id="feedback" class="mt-16">
		<h2 class="text-xl font-semibold mb-4 text-theme">
			Feedback & Support
		</h2>
		<div class="bg-blue-50 dark:bg-blue-900 p-6 rounded-lg border border-blue-200 dark:border-blue-700">
			<h3 class="font-semibold text-white-800 mb-3">
				We'd Love to Hear From You!
			</h3>
			<p class="text-white-700 mb-4">
				Have suggestions, found a bug, or want to share how this
				tool helped you? We're always looking to improve!
			</p>
			<div class="space-y-3">
				<div>
					<h4 class="font-medium text-white-800">
						📧 Email Us:
					</h4>
					<a href="mailto:info@wesselvandenijssel.nl?subject=Salary Calculator Feedback"
						class="text-white-600 hover:underline">
						info@wesselvandenijssel.nl
					</a>
				</div>
				<div>
					<h4 class="font-medium text-white-800">
						💬 What to Include:
					</h4>
					<ul class="text-white-700 text-sm space-y-1">
						<li>• Feature requests or improvement ideas</li>
						<li>• Bug reports or technical issues</li>
						<li>• Currency or functionality suggestions</li>
						<li>
							• General feedback about your experience
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="changelog" class="mt-16">
		<h2 class="text-xl font-semibold mb-4 text-theme">
			Recent Updates
		</h2>
		<div class="space-y-4">
			<div class="border-l-4 border-green-500 pl-4">
				<h3 class="font-semibold text-theme">
					v2.0 - August 2025
				</h3>
				<ul class="text-white-700 text-sm mt-2 space-y-1">
					<li>
						• Added flexible output periods (second, minute,
						day, week, biweek, month)
					</li>
					<li>
						• Improved live counter accuracy for all time
						periods
					</li>
					<li>• Enhanced mobile responsiveness</li>
				</ul>
			</div>
			<div class="border-l-4 border-blue-500 pl-4">
				<h3 class="font-semibold text-theme">
					v1.5 - July 2024
				</h3>
				<ul class="text-white-700 text-sm mt-2 space-y-1">
					<li>• Added 50+ global currencies support</li>
					<li>
						• Introduced famous people's salaries section
					</li>
					<li>• Enhanced dark mode support</li>
				</ul>
			</div>
			<div class="border-l-4 border-purple-500 pl-4">
				<h3 class="font-semibold text-theme">
					v1.0 - June 2024
				</h3>
				<ul class="text-white-700 text-sm mt-2 space-y-1">
					<li>
						• Initial release with basic salary calculation
					</li>
					<li>• Real-time earnings counter</li>
					<li>• Multiple salary input formats</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="call-to-action" class="mt-16 text-center">
		<h2 class="text-xl font-semibold mb-4 text-theme">
			Ready to See Your Earnings Live?
		</h2>
		<button onclick="document.getElementById('income').focus()"
			class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
			Start Calculating Now
		</button>
	</section>
</main>

<?php include 'footer.php'; ?>