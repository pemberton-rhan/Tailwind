<!doctype html>
<html lang="en">
	<head>
		<?php wp_head(); ?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/src/output.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/src/custom.css" rel="stylesheet">
	</head>
	<body class="p-5 flex flex-col items-center">
		
		<!-- Component regular CSS -->
		<div id="cta">
			<div class="inner">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
				<p class="title">Need to save time?</p>
				<p class="content">Hire a company to form your LLC:
				</br>
				<strong><a href="#">Northwest</a> ($39 + state fee)</strong>
				</br>
				<a href="#">LegalZoom</a> ($149 + state fee)
				</p>
			</div>
		</div>
		
		<!-- Component Tailwind -->
		<div id="cta-tailwind" class="flex justify-center bg-llc-blue font-poppins w-[350px] p-[15px] relative shadow-custom rounded-sm mb-[50px]">
			<div class="inner">
				<svg class="absolute top-[10px] right-[10px] w-[17px] height-[17px] hover:cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
				<h4 class="text-[17px] font-bold leading-[23.8px] mb-[5px]">Need to save time?</h4>
				<div class="leading-[26px]">
					<p>Hire a company to form your LLC:</p>
					<p class="font-bold text-llc-dark-blue">
						<a class="underline hover:bg-llc-yellow" href="#">Northwest</a> ($39 + state fee)
					</p>
					<p>
						<a class="underline hover:bg-llc-yellow" href="#">LegalZoom</a> ($149 + state fee)
					</p>
				</div>
			</div>
		</div>
			
	</body>
</html>