<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
    
    // TOOLTIP

    const tooltips = document.querySelectorAll('.itt')
        tooltips.forEach(t => {
            new bootstrap.Tooltip(t)
        });

// SIDEBAR TOGGLE

    var menu_btn = document.querySelector("#btn")
    var sidebar = document.querySelector(".sidebar")
    var container = document.querySelector(".main")
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav")
        container.classList.toggle("active-cont")
    })

</script>