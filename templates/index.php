
<div class="flash-notices">
<?php
foreach ($session->getFlashBag()->get('success', []) as $message) {
    echo '<div class="flash-notice">'.$message.'</div>';
}
?>
</div>

<div class="wrap boilr-test">
    <div class="boilr-test__logo">
        <svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
            <style type="text/css">
                .Dodaj_x0020_cień{fill:none;}
                .Okrągłe_x0020_narożniki_x0020__x0028_2_x0020_pkt_x002E__x0029_{fill:#FFFFFF;stroke:#1D1D1B;stroke-miterlimit:10;}
                .Aktywne_x0020_odbicie_x0020_X{fill:none;}
                .Miękka_x0020_faza{fill:url(#SVGID_1_);}
                .Zmierzch{fill:#FFFFFF;}
                .Foliage_GS{fill:#FFDD00;}
                .Pompadour_GS{fill-rule:evenodd;clip-rule:evenodd;fill:#51AEE2;}
                .st0{fill:#6D2515;}
                .st1{fill:#EE7840;}
                .st2{fill:#DC9D25;}
                .st3{fill:#1A323E;}
                .st4{fill:#122229;}
            </style>
            <g>
                <path class="st0" d="M70.04,86.01l-39.08,7.82c0,0-4.25-1.75-1.24-5.31c5.89-1.18,30.12-5.42,39.03-7.09
                    C70.16,80.86,73.25,84.13,70.04,86.01z"/>
                <path class="st0" d="M70.27,94.63l-38.58-10c0,0-3.06-3.43,1.2-5.32c5.82,1.5,29.47,8.25,38.21,10.63
                    C72.62,90.05,73.98,94.34,70.27,94.63z"/>
                <g>
                    <path class="st1" d="M9.49,60.55c0,0,9.24,1.76,8.95,12.59S37.63,93.47,44.4,77.5s-6.53-17.95-6.53-17.95S28.13,54.56,9.49,60.55z
                        "/>
                    <path class="st2" d="M27.25,66.01c0,0,3.11,6.14,2.65,11.47c-0.45,5.33,9.67,4.38,9.67,4.38s8.72-3.21,3.96-11.82
                        C38.78,61.42,27.25,66.01,27.25,66.01z"/>
                </g>
                <g>
                    <path class="st1" d="M92.59,62.41c0,0-9.36,0.99-9.96,11.81s-20.79,18.68-26.22,2.2s7.99-17.35,7.99-17.35
                        S74.52,54.91,92.59,62.41z"/>
                    <path class="st2" d="M74.45,66.39c0,0-3.6,5.86-3.59,11.21c0.01,5.35-10,3.56-10,3.56s-8.43-3.92-2.98-12.11
                        S74.45,66.39,74.45,66.39z"/>
                </g>
                <path class="st3" d="M81.05,17.77c12.81,8.68,19.36,59.31-31.55,57.66C-2.56,73.75,3.54,28.27,16.08,17.77
                    C27.08,23.3,56.51,27.78,81.05,17.77"/>
                <path class="st4" d="M51.32,75.47c54.03-2.1,39.38-53.47,29.73-57.7c-12.61,4.76-17.88,4.83-17.88,4.83S91.13,45.65,51.32,75.47z"
                    />
                <g>
                    <path class="st3" d="M48.91,5.37c32.53,0.18,33.91,8.03,33.91,9.46c0,5.85-18.21,9.3-34.57,9.35c-14.2,0.05-35.14-2.81-34.66-9.7
                        C13.7,12.91,16.32,5.19,48.91,5.37z"/>
                    <path d="M48.05,7.36c27.37,0.15,32.47,6.01,32.47,7.22c0,4.93-19.14,7.44-32.9,7.48c-11.95,0.04-32.53-1.93-32.13-7.73
                        C15.58,13,20.62,7.2,48.05,7.36z"/>
                </g>
                <g>
                    <path class="st1" d="M50.65,47.54c0,0,2.21,9.14-7.78,13.35S32.26,86.75,49.6,86.33c17.34-0.42,13.66-13.35,13.66-13.35
                        S63.79,62.05,50.65,47.54z"/>
                    <path class="st2" d="M53,65.97c0,0-4.31,5.36-9.36,7.15s0,10.62,0,10.62s6.52,6.62,12.4-1.26S53,65.97,53,65.97z"/>
                </g>
            </g>
        </svg>
    </div>
    <div class="boilr-test__title">Boilr</div>
    <div class="boilr-test__description">Wordpress Plugin Boilerplate</div>
    <div class="boilr-test__button">
        <button type="button" class="testbutton">kliknij</button>
        <form action="<?=esc_url( admin_url( 'admin-post.php' ) ) ?>" method="post">
            <input type="hidden" name="action" value="test_handler">
            <button type="submit">Test handler</button>
        </form>        
    </div>
</div>
