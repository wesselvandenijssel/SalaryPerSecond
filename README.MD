# Real-Time Salary Meter Web App

## Description

A minimal, interactive web application that calculates and visualizes your salary per second in real-time. Inspired by ChatGPT’s typing animation, it provides instant feedback and a live counter showing your earnings since calculation.

## Features

-   Input fields for annual gross salary (€) and weekly working hours.
-   Calculates salary per second using the formula:  
    `per second = income / (hours per week × 52 × 3600)`
-   Animated chat-style output using TypeIt.js for a conversational feel.
-   Live counter displays how much you've earned since clicking **Calculate**.
-   Light/Dark theme toggle for user preference.
-   Responsive, clean UI styled with TailwindCSS and custom CSS.
-   No data is stored or transmitted; all calculations are performed client-side.

## Sections

-   **Calculator**: Main interactive tool for input and results.
-   **How It Works**: Explanation of the calculation logic.
-   **About**: Project background and privacy note.

## Usage

1. Enter your annual gross salary and weekly working hours.
2. Click **Calculate** to see your per-second earnings and start the live counter.
3. Use the theme toggle button (🌓) to switch between light and dark modes.

## Dependencies

-   [TailwindCSS](https://cdn.tailwindcss.com/) (via CDN)
-   [TypeIt.js](https://typeitjs.com/) (for typing animation, via CDN)

## Author

Created by Wessel van den IJssel
