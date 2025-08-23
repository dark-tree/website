<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <title>Dark Tree - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Home of the Dark Tree organization">
        <meta name="author" content="magistermaks">
        <link rel="icon" type="image/png" href="assets/icon.png">

		<?php
			$git_on = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAAAttJREFUeJzt3T2OGkEUAGGwLCROgRAZN0Ck5FyAkLkEt4KYhEsQICFExl9CBCKxE6d+PVK7GXDVl75lll1KLXXPrN1ufb5fTb+BTO2m30DkR9NvQM0yADgDgDMAOAOAMwA4A4B7xx712/fxTSv6GbkCwBkAnAHAGQCcAcAZAJwBwP2LPWbWPv/1eoXzTqeTc/nGveHny/oMXQHgDADOAOAMAM4A4AwAzgDgftb4mkbv5+fuo1OvTyl9/cFgEM73+33qEqnPJzwncAWAMwA4A4AzADgDgDMAOAOAq3MO8NFS+/Dj8RjOe71e0et/OlcAOAOAMwA4A4AzADgDgDMAuHar8P3+3Pvl377Pvt1u4fz5fIbz+Xwezms8LxByBYAzADgDgDMAOAOAMwA4A4Br/HmA1D5/uVyG8+l0mvX9U9cfj8dZ1/90rgBwBgBnAHAGAGcAcAYAZwBwjZ8DpKT2+an77Sml9/mp+/1NcwWAMwA4A4AzADgDgDMAOAOAK/53ASmHw6Ho9U+nU9Hr5+7zSz/3n+IKAGcAcAYAZwBwBgBnAHAGANf4OUCu1DlC7jlA7t/vp5Te56e4AsAZAJwBwBkAnAHAGQCcAcBlnwNcLpdwPhqNwnnpfXDuOcFsNgvnTe/jc7kCwBkAnAHAGQCcAcAZAJwBwIX/t/wfWecE2+02nHe73XA+mUzC+Xq9Duepff71eg3nj8cjnC8Wi3D+AecE4WfsCgBnAHAGAGcAcAYAZwBwBgBX/N8JHA6H4Tx1v770Pp/OFQDOAOAMAM4A4AwAzgDgDACuzjlA6pmBrOcF+v1+zstbq9Uq6/X/gTrPdPyVKwCcAcAZAJwBwBkAnAHAGQBc1h6ypqxzgs1mE87v93vO5ZPO53PW66uqyn0LRT8jVwA4A4AzADgDgDMAOAOAMwC4d5wDFLXZbMJzht1uV/T7V1X11b9DVwA4A4AzADgDgDMAOAOAMwC439H0n148zqMGAAAAAElFTkSuQmCC";

			$git_off = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAAAshJREFUeJzt3bFtIkEYQGE4XUJGDxDSA3RBTkrINkETJNsEIeSUAAUgCMggsxOnnlnpv2GWe+9L53YPe59G+gdsDwf991X7BQQNa7+AlD+1X4DqMgA4A4AzADgDgDMAOAOAe8eM+ulzfG1Fn5E7AJwBwBkAnAHAGQCcAcAZANy/mDFDc/75fE6uT6fTyO2re8PXF3qG7gBwBgBnAHAGAGcAcAYAZwBwfzv8m6rv50fn6Nz1OaXvP5lMkuuXyyV3i9zzSZ4TuAPAGQCcAcAZAJwBwBkAnAHAdTkH6LXcHP54PJLr4/G46P37zh0AzgDgDADOAOAMAM4A4AwAbjgo/H5/9P3yT5+z7/d7cv31eiXXN5tNcr3D5wWS3AHgDADOAOAMAM4A4AwAzgDgqn8eIDfnHw6H5PpisQj9/7n7z2az0P37zh0AzgDgDADOAOAMAM4A4AwArvo5QE5uzs+9355Tes7Pvd9fmzsAnAHAGQCcAcAZAJwBwBkAXPGfC8g5Ho9F7/98PovePzrnl/7cf447AJwBwBkAnAHAGQCcAcAZAFz1c4Co3DlC9Bwg+vP7OaXn/Bx3ADgDgDMAOAOAMwA4A4AzALjwOcDpdEquL5fL5HrpOTh6TrBer5Prtef4KHcAOAOAMwA4A4AzADgDgDMAuOTflv8ROifY7/fJ9dFolFxfrVbJ9d1ul1zPzfm32y10/Xa7Ta734Jwg+YzdAeAMAM4A4AwAzgDgDADOAOCKnwPkRH8/QHTOj97fcwB9NAOAMwA4A4AzADgDgDMAuC5/LyB3VhA6J5jP55HLB23bhq7/D3Q5y/mVOwCcAcAZAJwBwBkAnAHAGQBcaIbsKHROUHvOv16voeubpom+hKLPyB0AzgDgDADOAOAMAM4A4AwA7h3nAEW1bZs8Z4jO8TlN03z099AdAM4A4AwAzgDgDADOAOAMAO4bT8KgsrQTojkAAAAASUVORK5CYII=";
		?>

		<script>
			function gitWartHover(element) {
				element.setAttribute('src', '<?php echo $git_on; ?>');
			}

			function gitWartUnhover(element) {
				element.setAttribute('src', '<?php echo $git_off; ?>');
			}
		</script>

        <style>
        	<?php readfile("assets/animations.css"); ?>
        	<?php readfile("assets/styles.css"); ?>
        </style>
    </head>
	<body>
		<header>
            <nav>
                <a class="entry selected" href="index">
                    <span>HOME</span>
                </a>

				<a href="https://github.com/dark-tree">
					<img onmouseover="gitWartHover(this);" onmouseout="gitWartUnhover(this);" title="Github Account" alt="Github" src="<?php echo $git_off; ?>" id="git-wart" class="crisp">
				</a>
            </nav>
        </header>
		<section>
            <img class="center logo spacer" src="assets/darktree.png" alt="Stylized Dark Tree logo"/>

            <!-- why do we need to set the color here? -->
            <center style="color: #cfcfcf;">Our work includes...</center>

            <div class="center columns">
                <div>
                    <img class="plac" src="assets/plac-1.png" alt="Paragraph header icon"/>
                    <p>
                    	Low level projects and libraries in C and C++, including a JIT assembler called
                    	<a href="https://github.com/dark-tree/asmiov">Asmiov</a>,
                    	and a tiny, unfinished linux-like x86 kernel called
                    	<a href="https://github.com/dark-tree/neos">NEOS</a>.
                    </p>
                </div>
                <div>
                    <img class="plac" src="assets/plac-2.png" alt="Paragraph header icon"/>
                    <p>
						Computer graphics focused projects such as
						<a href="https://github.com/magistermaks/plgl">PLGL</a>,
						a loose recreation of Processing API in OpenGL,
						or the Vulkan-based ray tracing engine called
						<a href="https://github.com/dark-tree/checklight">Checklight</a>.
                    </p>
                </div>
                <div>
                    <img class="plac" src="assets/plac-3.png" alt="Paragraph header icon"/>
                    <p>
                    	Many modifications and plugins for Java-based applications.
                    	Including Minecraft mods, such as
                    	<a nowrap href="https://modrinth.com/mod/red-bits">Red Bits</a>,
                    	build on the Fabric toolchain.
                    </p>
                </div>
                <div>
                    <img class="plac" src="assets/plac-4.png" alt="Paragraph header icon"/>
                    <p>
                    	More artistic drawing, writing, and Blender modeling, that I shall not
                    	link here in respect of the Dear Reader's precious pair eyes.
                    </p>
                </div>
            </div>
        </section>
		<footer>
            <div class="landscape-fill"></div>
            <div class="landscape flat"></div>
            <div class="landscape tree"></div>
            <div id="footer">
                &copy; <span id="year"><?php echo date("Y"); ?></span>
            </div>
        </footer>
	</body>
</html>
