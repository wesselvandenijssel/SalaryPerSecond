<!DOCTYPE html>
<html lang="<?php echo getCurrentLang(); ?>">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php echo t('calculator_title'); ?> - Real-Time Earnings Calculator | Free
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
	<link rel="stylesheet" href="style.css" />
</head>

<body class="light">
	<header>
		<h1 class="text-xl font-bold"><?php echo t('site_title'); ?></h1>
		<nav>
			<div class="nav-item">
				<a href="#calculator"><?php echo t('nav_calculator'); ?></a>
			</div>
			<div class="nav-item">
				<a href="#features"><?php echo t('nav_features'); ?></a>
			</div>
			<div class="nav-item has-dropdown">
				<a href="#about"><?php echo t('nav_about'); ?></a>
				<div class="dropdown">
					<a href="#how-it-works"><?php echo t('nav_how_it_works'); ?></a>
					<a href="#use-cases"><?php echo t('nav_use_cases'); ?></a>
					<a href="#privacy"><?php echo t('nav_privacy'); ?></a>
				</div>
			</div>
			<div class="nav-item has-dropdown">
				<a href="#resources"><?php echo t('nav_resources'); ?></a>
				<div class="dropdown">
					<a href="#famous-salaries"><?php echo t('nav_famous_salaries'); ?></a>
					<a href="#feedback"><?php echo t('nav_feedback'); ?></a>
					<a href="#changelog"><?php echo t('nav_changelog'); ?></a>
					<a href="#faq"><?php echo t('nav_faq'); ?></a>
				</div>
			</div>
			<a href="?lang=<?php echo getOtherLang(); ?>" class="ml-4 border px-2 py-1 rounded text-sm">
				<?php echo getOtherLangName(); ?>
			</a>
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
			<a href="#calculator"><?php echo t('nav_calculator'); ?></a>
			<a href="#features"><?php echo t('nav_features'); ?></a>
			<a href="#how-it-works"><?php echo t('nav_how_it_works'); ?></a>
			<a href="#use-cases"><?php echo t('nav_use_cases'); ?></a>
			<a href="#famous-salaries"><?php echo t('nav_famous_salaries'); ?></a>
			<a href="#privacy"><?php echo t('nav_privacy'); ?></a>
			<a href="#feedback"><?php echo t('nav_feedback'); ?></a>
			<a href="#changelog"><?php echo t('nav_changelog'); ?></a>
			<a href="#faq"><?php echo t('nav_faq'); ?></a>
			<a href="?lang=<?php echo getOtherLang(); ?>"><?php echo getOtherLangName(); ?></a>
			<a href="#" onclick="toggleTheme(); return false;">🌓 <?php echo t('toggle_theme'); ?></a>
		</div>
	</header>