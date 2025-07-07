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