<div class="switcher-wrapper ">
    <div class="switcher-btn"> <i class="bx bx-cog bx-spin"></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" id="bt-clos" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr>
        <p class="mb-0">Gaussian Texture</p>
        <hr>
        <ul class="switcher">
            <li style="cursor: pointer" id="theme1" onclick="changeTheme('bg-theme1')"></li>
            <li style="cursor: pointer" id="theme2" onclick="changeTheme('bg-theme2')"></li>
            <li style="cursor: pointer" id="theme3" onclick="changeTheme('bg-theme3')"></li>
            <li style="cursor: pointer" id="theme4" onclick="changeTheme('bg-theme4')"></li>
            <li style="cursor: pointer" id="theme5" onclick="changeTheme('bg-theme5')"></li>
            <li style="cursor: pointer" id="theme6" onclick="changeTheme('bg-theme6')"></li>
        </ul>
    </div>
</div>

<script>
    document.querySelector('.switcher-btn').addEventListener('click', function() {
        document.querySelector('.switcher-wrapper').classList.toggle('switcher-toggled');
    });

    document.getElementById('bt-clos').addEventListener('click', function() {
        document.querySelector('.switcher-wrapper').classList.remove('switcher-toggled');
    });

    function changeTheme(themeClass) {
        const body = document.querySelector('body');
        body.className = 'bg-theme ' + themeClass + ' pace-done';


        localStorage.setItem('selectedTheme', themeClass);
    }


    document.addEventListener('DOMContentLoaded', function() {
        const savedTheme = localStorage.getItem('selectedTheme');
        if (savedTheme) {
            changeTheme(savedTheme);
        }
    });
</script>
