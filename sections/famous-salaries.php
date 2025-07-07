<section id="famous-salaries" class="mt-16">
	<h2 class="text-3xl font-bold mb-6 text-theme text-center">
		<?php echo t('famous_salaries_title'); ?>
	</h2>
	<p class="text-lg text-gray-600 dark:text-gray-300 mb-8 text-center max-w-3xl mx-auto text-theme">
		<?php echo t('famous_salaries_description'); ?>
	</p>
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
		<button onclick="setFamousSalary(27110418, 40)"
			class="p-6 border-2 border-blue-200 dark:border-blue-700 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900 text-left shadow-md hover:shadow-lg transition-all">
			<div class="font-bold text-lg text-blue-600 dark:text-blue-400">
				<?php echo t('mark_zuckerberg'); ?>
			</div>
			<div class="text-sm mt-1"><?php echo t('mark_zuckerberg_title'); ?></div>
			<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
				€27.1M <?php echo t('annually'); ?>
			</div>
			<div class="text-xs text-gray-500 mt-1">
				<?php echo t('famous_salary_click'); ?>
			</div>
		</button>
		<button onclick="setFamousSalary(39288458, 40)"
			class="p-6 border-2 border-purple-200 dark:border-purple-700 rounded-lg hover:bg-purple-50 dark:hover:bg-purple-900 text-left shadow-md hover:shadow-lg transition-all">
			<div class="font-bold text-lg text-purple-600 dark:text-purple-400">
				<?php echo t('david_zaslav'); ?>
			</div>
			<div class="text-sm mt-1"><?php echo t('david_zaslav_title'); ?></div>
			<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
				€39.3M <?php echo t('annually'); ?>
			</div>
			<div class="text-xs text-gray-500 mt-1">
				<?php echo t('famous_salary_click'); ?>
			</div>
		</button>
		<button onclick="setFamousSalary(51073237, 40)"
			class="p-6 border-2 border-red-200 dark:border-red-700 rounded-lg hover:bg-red-50 dark:hover:bg-red-900 text-left shadow-md hover:shadow-lg transition-all">
			<div class="font-bold text-lg text-red-600 dark:text-red-400">
				<?php echo t('reed_hastings'); ?>
			</div>
			<div class="text-sm mt-1"><?php echo t('reed_hastings_title'); ?></div>
			<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
				€51.1M <?php echo t('annually'); ?>
			</div>
			<div class="text-xs text-gray-500 mt-1">
				<?php echo t('famous_salary_click'); ?>
			</div>
		</button>
		<button onclick="setFamousSalary(54946310, 40)"
			class="p-6 border-2 border-indigo-200 dark:border-indigo-700 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900 text-left shadow-md hover:shadow-lg transition-all">
			<div class="font-bold text-lg text-indigo-600 dark:text-indigo-400">
				<?php echo t('satya_nadella'); ?>
			</div>
			<div class="text-sm mt-1"><?php echo t('satya_nadella_title'); ?></div>
			<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
				€54.9M <?php echo t('annually'); ?>
			</div>
			<div class="text-xs text-gray-500 mt-1">
				<?php echo t('famous_salary_click'); ?>
			</div>
		</button>
		<button onclick="setFamousSalary(99420097, 40)"
			class="p-6 border-2 border-yellow-200 dark:border-yellow-700 rounded-lg hover:bg-yellow-50 dark:hover:bg-yellow-900 text-left shadow-md hover:shadow-lg transition-all">
			<div class="font-bold text-lg text-yellow-600 dark:text-yellow-400">
				<?php echo t('tim_cook'); ?>
			</div>
			<div class="text-sm mt-1"><?php echo t('tim_cook_title'); ?></div>
			<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
				€99.4M <?php echo t('annually'); ?>
			</div>
			<div class="text-xs text-gray-500 mt-1">
				<?php echo t('famous_salary_click'); ?>
			</div>
		</button>
		<button onclick="setFamousSalary(25000, 40)"
			class="p-6 border-2 border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 text-left shadow-md hover:shadow-lg transition-all">
			<div class="font-bold text-lg text-white-600 dark:text-white-400">
				<?php echo t('eu_median'); ?>
			</div>
			<div class="text-sm mt-1"><?php echo t('eu_median_title'); ?></div>
			<div class="text-lg font-semibold text-green-600 dark:text-green-400 mt-2">
				€25K <?php echo t('annually'); ?>
			</div>
			<div class="text-xs text-gray-500 mt-1">
				<?php echo t('famous_salary_click'); ?>
			</div>
		</button>
	</div>
	<div
		class="mt-8 p-4 bg-yellow-50 dark:bg-yellow-900 rounded-lg border border-yellow-200 dark:border-yellow-700">
		<p class="text-sm text-white-800">
			<?php echo t('famous_salary_data_source'); ?>
		</p>
	</div>
</section>