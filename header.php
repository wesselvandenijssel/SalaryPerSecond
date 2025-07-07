<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		Salary Calculator Per Second - Real-Time Earnings Calculator | Free
		Online Tool
	</title>
	<meta name="description"
		content="Calculate your salary per second, minute, hour, day, week, or month with our free real-time earnings calculator. Supports 50+ currencies, multiple salary formats, and live earnings counter. Perfect for salary negotiation and financial planning." />
	<meta name="keywords"
		content="salary calculator, earnings per second, hourly wage calculator, salary per minute, real-time earnings, wage calculator, salary negotiation tool, financial planning, currency converter" />
	<meta name="author" content="Wessel van den IJssel" />
	<meta name="robots" content="index, follow" />
	<link rel="canonical" href="https://salaryperSecond.com" />

	<!-- Open Graph meta tags for social media -->
	<meta property="og:title" content="Salary Calculator Per Second - Real-Time Earnings Calculator" />
	<meta property="og:description"
		content="Calculate your salary per second with our free online tool. Supports multiple currencies and time periods. Perfect for salary negotiation and financial planning." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://salaryperSecond.com" />
	<meta property="og:image" content="https://salaryperSecond.com/og-image.jpg" />

	<!-- Twitter Card meta tags -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Salary Calculator Per Second - Real-Time Earnings Calculator" />
	<meta name="twitter:description"
		content="Calculate your salary per second with our free online tool. Supports multiple currencies and time periods." />
	<meta name="twitter:image" content="https://salaryperSecond.com/twitter-image.jpg" />

	<!-- Schema.org structured data -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebApplication",
			"name": "Salary Calculator Per Second",
			"alternateName": "Real-Time Earnings Calculator",
			"description": "Free online tool to calculate salary per second, minute, hour, day, week, or month with real-time earnings counter. Supports 50+ currencies and multiple salary formats.",
			"url": "https://salaryperSecond.com",
			"applicationCategory": "FinanceApplication",
			"operatingSystem": "Web Browser",
			"browserRequirements": "HTML5, JavaScript",
			"softwareVersion": "2.0",
			"dateCreated": "2024-11-01",
			"dateModified": "2025-01-01",
			"offers": {
				"@type": "Offer",
				"price": "0",
				"priceCurrency": "USD"
			},
			"creator": {
				"@type": "Person",
				"name": "Wessel van den IJssel",
				"email": "info@wesselvandenijssel.nl",
				"url": "https://www.linkedin.com/in/wessel-van-den-ijssel/"
			},
			"aggregateRating": {
				"@type": "AggregateRating",
				"ratingValue": "4.8",
				"ratingCount": "125"
			},
			"featureList": [
				"Real-time earnings counter",
				"50+ global currencies support",
				"Multiple salary input formats",
				"Flexible output periods",
				"Celebrity salary comparisons",
				"Privacy-first design",
				"Mobile responsive",
				"Dark mode support"
			],
			"keywords": [
				"salary calculator",
				"earnings per second",
				"hourly wage calculator",
				"salary per minute",
				"real-time earnings",
				"wage calculator",
				"financial planning",
				"currency converter",
				"salary negotiation",
				"freelance rates"
			]
		}
	</script>

	<!-- Additional structured data for FAQ -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "FAQPage",
			"mainEntity": [{
					"@type": "Question",
					"name": "Is my salary data saved or shared with anyone?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "No. All calculations happen locally in your browser, ensuring complete privacy. No data is ever sent to our servers, stored, or shared with third parties."
					}
				},
				{
					"@type": "Question",
					"name": "How accurate are the salary calculations?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "The calculations are mathematically precise based on your inputs. We convert everything to annual figures and divide by the appropriate time periods for accurate results across all supported currencies."
					}
				},
				{
					"@type": "Question",
					"name": "Can I use this calculator for freelance or contract work?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Absolutely! This tool is perfect for freelancers to understand their hourly value and set competitive rates. Use the hourly input format for the most accurate freelance calculations."
					}
				},
				{
					"@type": "Question",
					"name": "What currencies are supported by the calculator?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "We support 50+ major global currencies including EUR, USD, GBP, JPY, and many regional currencies from Europe, Asia, Americas, Africa, and Oceania."
					}
				}
			]
		}
	</script>

	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/typeit@8.7.1/dist/index.umd.js"></script>
	<style>
		:root {
			--bg-light: #f9fafb;
			--bg-dark: #1f2937;
			--text-light: #1f2937;
			--text-dark: #f9fafb;
			--text-theme: #3b82f6;
		}

		.text-theme {
			color: var(--text-light);
		}

		body.dark .text-theme {
			color: var(--text-dark);
		}

		body.light {
			background-color: var(--bg-light);
			color: var(--text-light);
		}

		body.dark {
			background-color: var(--bg-dark);
			color: var(--text-dark);
		}

		.chat-box {
			max-width: 800px;
			margin: 4rem auto;
			padding: 2rem;
		}

		.message {
			background-color: #e5e7eb;
			padding: 1rem;
			border-radius: 0.5rem;
			margin-bottom: 1rem;
		}

		body.dark .message {
			background-color: #374151;
		}

		.input-area {
			background-color: #f3f4f6;
			padding: 1rem;
			border-radius: 0.5rem;
			display: flex;
			gap: 1rem;
			flex-wrap: wrap;
		}

		body.dark .input-area {
			background-color: #374151;
		}

		#chat-output {
			color: #22c55e;
		}

		body.dark #chat-output {
			color: #4ade80;
		}

		#live-counter {
			color: #3b82f6;
		}

		body.dark #live-counter {
			color: #60a5fa;
		}

		input,
		button,
		select {
			background-color: #ffffff;
			color: #1f2937;
			border: 1px solid #d1d5db;
			padding: 0.5rem 1rem;
			border-radius: 0.375rem;
		}

		body.dark input,
		body.dark button,
		body.dark select {
			background-color: #374151;
			color: #f9fafb;
			border-color: #4b5563;
		}

		button:hover {
			background-color: #e5e7eb;
		}

		body.dark button:hover {
			background-color: #4b5563;
		}

		label {
			color: var(--text-light);
		}

		body.dark label {
			color: var(--text-dark);
		}

		header {
			background-color: var(--bg-light);
			color: var(--text-light);
			padding: 1rem 2rem;
			border-bottom: 1px solid #e5e7eb;
			display: flex;
			justify-content: space-between;
			align-items: center;
			position: relative;
		}

		nav {
			display: flex;
			gap: 0.5rem;
			align-items: center;
		}

		.nav-item {
			position: relative;
			display: inline-block;
		}

		.nav-item>a {
			color: #059669;
			text-decoration: none;
			padding: 0.5rem 1rem;
			border-radius: 0.375rem;
			font-size: 0.875rem;
			white-space: nowrap;
			display: block;
			transition: all 0.2s ease;
			position: relative;
		}

		.nav-item.has-dropdown>a::after {
			content: "▼";
			font-size: 0.7rem;
			margin-left: 0.5rem;
			transition: transform 0.2s ease;
		}

		.nav-item.has-dropdown:hover>a::after {
			transform: rotate(180deg);
		}

		.nav-item>a:hover {
			background-color: #ecfdf5;
			color: #047857;
		}

		.dropdown {
			position: absolute;
			top: 100%;
			left: 0;
			background-color: white;
			border: 1px solid #e5e7eb;
			border-radius: 0.5rem;
			box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
			min-width: 200px;
			z-index: 1000;
			opacity: 0;
			visibility: hidden;
			transform: translateY(-10px);
			transition: all 0.2s ease;
		}

		.nav-item:hover .dropdown {
			opacity: 1;
			visibility: visible;
			transform: translateY(0);
		}

		.dropdown a {
			color: #374151;
			text-decoration: none;
			padding: 0.75rem 1rem;
			display: block;
			font-size: 0.875rem;
			transition: all 0.2s ease;
			border-radius: 0;
		}

		.dropdown a:hover {
			background-color: #f3f4f6;
			color: #059669;
		}

		.dropdown a:first-child {
			border-top-left-radius: 0.5rem;
			border-top-right-radius: 0.5rem;
		}

		.dropdown a:last-child {
			border-bottom-left-radius: 0.5rem;
			border-bottom-right-radius: 0.5rem;
		}

		.hamburger {
			display: none;
			flex-direction: column;
			cursor: pointer;
			padding: 0.5rem;
		}

		.hamburger span {
			width: 25px;
			height: 3px;
			background-color: #059669;
			margin: 2px 0;
			transition: 0.3s;
		}

		.mobile-menu {
			display: none;
			position: absolute;
			top: 100%;
			left: 0;
			right: 0;
			background-color: white;
			border-top: 1px solid #e5e7eb;
			box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
			z-index: 1000;
		}

		.mobile-menu.active {
			display: block;
		}

		.mobile-menu a {
			color: #374151;
			text-decoration: none;
			padding: 1rem 2rem;
			display: block;
			border-bottom: 1px solid #f3f4f6;
			transition: all 0.2s ease;
		}

		.mobile-menu a:hover {
			background-color: #f9fafb;
			color: #059669;
		}

		.mobile-menu a:last-child {
			border-bottom: none;
		}

		@media (max-width: 768px) {
			header {
				flex-direction: column;
				align-items: flex-start;
				gap: 0;
			}

			nav {
				display: none;
			}

			.hamburger {
				display: flex;
				position: absolute;
				top: 1rem;
				right: 2rem;
			}

			.hamburger.active span:nth-child(1) {
				transform: rotate(-45deg) translate(-5px, 6px);
			}

			.hamburger.active span:nth-child(2) {
				opacity: 0;
			}

			.hamburger.active span:nth-child(3) {
				transform: rotate(45deg) translate(-5px, -6px);
			}

			h1 {
				text-align: left;
			}
		}

		@media (min-width: 769px) {
			.nav-item>a {
				font-size: 1rem;
			}
		}

		body.dark header {
			background-color: var(--bg-dark);
			color: var(--text-dark);
		}

		body.dark .nav-item>a {
			color: #34d399;
		}

		body.dark .nav-item>a:hover {
			background-color: #064e3b;
			color: #6ee7b7;
		}

		body.dark .dropdown {
			background-color: #374151;
			border-color: #4b5563;
		}

		body.dark .dropdown a {
			color: #f9fafb;
		}

		body.dark .dropdown a:hover {
			background-color: #4b5563;
			color: #34d399;
		}

		body.dark .mobile-menu {
			background-color: #374151;
			border-color: #4b5563;
		}

		body.dark .mobile-menu a {
			color: #f9fafb;
			border-color: #4b5563;
		}

		body.dark .mobile-menu a:hover {
			background-color: #4b5563;
			color: #34d399;
		}

		body.dark .hamburger span {
			background-color: #34d399;
		}

		footer {
			border-top: 1px solid #e5e7eb;
			padding: 1.5rem 2rem;
			text-align: center;
			font-size: 0.875rem;
			color: #6b7280;
		}

		footer a {
			color: #3b82f6;
			text-decoration: none;
			margin: 0 0.5rem;
		}

		footer a:hover {
			text-decoration: underline;
		}

		/* Enhanced section styles for better visual hierarchy */
		.bg-blue-50 {
			background-color: #eff6ff;
		}

		.bg-green-50 {
			background-color: #f0fdf4;
		}

		.bg-purple-50 {
			background-color: #faf5ff;
		}

		.bg-orange-50 {
			background-color: #fff7ed;
		}

		.bg-red-50 {
			background-color: #fef2f2;
		}

		.bg-yellow-50 {
			background-color: #fefce8;
		}

		/* Dark mode variants */
		.dark .bg-blue-50 {
			background-color: #1e3a8a;
		}

		.dark .bg-green-50 {
			background-color: #166534;
		}

		.dark .bg-purple-50 {
			background-color: #6b21a8;
		}

		.dark .bg-orange-50 {
			background-color: #c2410c;
		}

		.dark .bg-red-50 {
			background-color: #b91c1c;
		}

		.dark .bg-yellow-50 {
			background-color: #ca8a04;
		}

		/* Improved shadow and transition effects */
		.shadow-md {
			box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
				0 2px 4px -1px rgba(0, 0, 0, 0.06);
		}

		.shadow-lg {
			box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
				0 4px 6px -2px rgba(0, 0, 0, 0.05);
		}

		.hover\\:shadow-lg:hover {
			box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
				0 4px 6px -2px rgba(0, 0, 0, 0.05);
		}

		.transition-shadow {
			transition: box-shadow 0.15s ease-in-out;
		}

		.transition-all {
			transition: all 0.15s ease-in-out;
		}

		/* Color utilities for the enhanced sections */
		.text-blue-600 {
			color: #2563eb;
		}

		.text-purple-600 {
			color: #9333ea;
		}

		.text-red-600 {
			color: #dc2626;
		}

		.text-indigo-600 {
			color: #4f46e5;
		}

		.text-yellow-600 {
			color: #d97706;
		}

		.text-green-600 {
			color: #16a34a;
		}

		/* Dark mode text colors */
		.dark .text-blue-600 {
			color: #60a5fa;
		}

		.dark .text-purple-600 {
			color: #c084fc;
		}

		.dark .text-red-600 {
			color: #f87171;
		}

		.dark .text-indigo-600 {
			color: #818cf8;
		}

		.dark .text-yellow-600 {
			color: #fbbf24;
		}

		.dark .text-green-600 {
			color: #4ade80;
		}

		/* Border colors for the enhanced sections */
		.border-blue-200 {
			border-color: #bfdbfe;
		}

		.border-purple-200 {
			border-color: #e9d5ff;
		}

		.border-red-200 {
			border-color: #fecaca;
		}

		.border-indigo-200 {
			border-color: #c7d2fe;
		}

		.border-yellow-200 {
			border-color: #fef3c7;
		}

		.border-gray-200 {
			border-color: #e5e7eb;
		}

		/* Dark mode border colors */
		.dark .border-blue-200 {
			border-color: #1e40af;
		}

		.dark .border-purple-200 {
			border-color: #7c3aed;
		}

		.dark .border-red-200 {
			border-color: #dc2626;
		}

		.dark .border-indigo-200 {
			border-color: #4338ca;
		}

		.dark .border-yellow-200 {
			border-color: #d97706;
		}

		.dark .border-gray-200 {
			border-color: #374151;
		}

		/* Hover background effects */
		.hover\\:bg-blue-50:hover {
			background-color: #eff6ff;
		}

		.hover\\:bg-purple-50:hover {
			background-color: #faf5ff;
		}

		.hover\\:bg-red-50:hover {
			background-color: #fef2f2;
		}

		.hover\\:bg-indigo-50:hover {
			background-color: #eef2ff;
		}

		.hover\\:bg-yellow-50:hover {
			background-color: #fefce8;
		}

		.hover\\:bg-gray-50:hover {
			background-color: #f9fafb;
		}

		/* Dark mode hover effects */
		.dark .hover\\:bg-blue-50:hover {
			background-color: #1e3a8a;
		}

		.dark .hover\\:bg-purple-50:hover {
			background-color: #6b21a8;
		}

		.dark .hover\\:bg-red-50:hover {
			background-color: #b91c1c;
		}

		.dark .hover\\:bg-indigo-50:hover {
			background-color: #3730a3;
		}

		.dark .hover\\:bg-yellow-50:hover {
			background-color: #ca8a04;
		}

		.dark .hover\\:bg-gray-50:hover {
			background-color: #374151;
		}

		body.dark .text-theme {
			color: var(--text-dark);
		}
	</style>
</head>

<body class="light">
	<header>
		<h1 class="text-xl font-bold">Salary Calculator</h1>
		<nav>
			<div class="nav-item">
				<a href="#calculator">Calculator</a>
			</div>
			<div class="nav-item">
				<a href="#features">Features</a>
			</div>
			<div class="nav-item has-dropdown">
				<a href="#about">About</a>
				<div class="dropdown">
					<a href="#how-it-works">How It Works</a>
					<a href="#use-cases">Use Cases</a>
					<a href="#privacy">Privacy</a>
				</div>
			</div>
			<div class="nav-item has-dropdown">
				<a href="#resources">Resources</a>
				<div class="dropdown">
					<a href="#famous-salaries">Famous Salaries</a>
					<a href="#feedback">Feedback</a>
					<a href="#changelog">Updates</a>
					<a href="#faq">FAQ</a>
				</div>
			</div>
			<button onclick="toggleTheme()" class="ml-4 border px-2 py-1 rounded">
				🌓
			</button>
		</nav>
		<div class="hamburger" onclick="toggleMobileMenu()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="mobile-menu" id="mobileMenu">
			<a href="#calculator">Calculator</a>
			<a href="#features">Features</a>
			<a href="#how-it-works">How It Works</a>
			<a href="#use-cases">Use Cases</a>
			<a href="#famous-salaries">Famous Salaries</a>
			<a href="#privacy">Privacy</a>
			<a href="#feedback">Feedback</a>
			<a href="#changelog">Updates</a>
			<a href="#faq">FAQ</a>
			<a href="#" onclick="toggleTheme(); return false;">🌓 Toggle Theme</a>
		</div>
	</header>