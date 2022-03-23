

GIT commit, päeviku kommentaarid ning ajad kokkupanduna:
2022-03-20 (5h)
- [ ] commit: filled most of initial index.php content (Alustasin ise theme tegemist, tutorial)
- [ ] commit: Added nav and sidebar
- [ ] commit: almost done with the tutorial: https://websitesetup.org/wordpress-theme-development/
- [ ] commit: Finished the basics of a custom theme
- [ ] commit: Added slider functions but not frontend yet.
- [ ] commit: added custom template 'template-01'
- [ ] commit: Added CSS to slider
- [ ] commit: trying to get cpt array in template-02.php
- [ ] commit: Got cpt posts and through a splitting function.
- [ ] commit: deleted tutorial owl slider html part
- [ ] commit: Got splitted array, while loop on frontend working, now need to add classes for owlcarousel js
- [ ] commit: Got frontend owlcarousel working with splitted post array. Only one though, need multiple and some logic that when there are maybe only two then dont error and show ok.
- [ ] commit: cleanup
- [ ] error, related: https://newbedev.com/php-7-2-deprecated-while-each-loop-without-value
- [ ] commit: got rid of each() depricated warning - changed with foreach
- [ ] commit: I have two sliders now. Tried to start autoplay for second slider with setTimeout and event but it seems that the first slide will delay, but the second slide will be in sync with the first slider.
- [ ] commit: Created second slider 2s after the first one, still same problem with timing. Will trigger next slide with custom clock.
- [ ] commit: Registered new cf called qoute text. It seems like a lot of work and I think I will switch it with ACF after.
- [ ] commit: 4 sliders ok
2022-03-21 (1,5h)
- [ ] logged out versioonis ei kuvanud slideried ütles paari errorit, et 'a' ja 'jQuery' pole defineeritud. Pidin jQuery laadimise enne owlcarousel.js-i tõstma.
- [ ] Tegin 3x3 grid ning panin sliderid vastavasse kohta. Tegin WPForms-i pluginaga vormi. Lisasin ACF.
- [ ] commit: made 3x3 grid and put sliders in. Added basic form to template
2022-03-22 (9h)
- [ ] commit: Läksin seda rada, et tegin shortcode mida siis tahan kuvada gutenbergis. Hetkel ei saa slaideried kuvama. Muu php sain shortcodes kuvama.
- [ ] https://wordpress.stackexchange.com/questions/302271/shortcode-with-foreach
- [ ] https://www.wonderplugin.com/wordpress-tutorials/how-to-create-a-wordpress-page-without-header-menu-sidebar-and-footer/
- [ ] commit: I think I got it, now I need to put the full html into the string to echo
- [ ] commit: Got it working.
- [ ] commit: Pretty good. Altough I see there is an issue when there is less than 4 slides.
- [ ] commit: A bit of styling.
- [ ] commit: layout, style, fonts
- [ ] commit: Styled. Added first mobile php logic.
- [ ] commit: Fixed errors when less than 4 slides and similar cases. Two things are weird: css for first column on dsktp low vh-s. Second is that the resource saving way of splitting arrays to two on mobile is affected only on wp_is_mobile and I think there might be a way to see 4 arrays and 2 sliders.
- [ ] commit: Cleaner
- [ ] commit: better responsiveness and style.
- [ ] vahepeal proovisin css gradientidega taustapilti järgi teha aga see osutus üsna võimatuks. Kõrvalekalle.
- [ ] commit: cleanup
- [ ] commit: Made hotfix for the math problem. ref functions.php 331
- [ ] commit: Added extra logic to fourth slider when splitting is not equal.
