<?php

if ($popup == true) {
?>


<?php if (!empty($massage['faild_massage'])) {
    ?>
<div id='timing_massage' class="sticky bottom-5 right-0 w-fit  bg-red-500 p-3 text-white z-50"
    style="right: 0px !important ;">
    <?php foreach ($massage['faild_massage'] as $msg) {
                echo $msg;
            } ?>
</div>
<?php } ?>
<?php if (!empty($massage['success_massage'])) {
    ?>
<div id='timing_massage' class="sticky bottom-5 right-0 w-fit  bg-green-500 p-3 text-white z-50"
    style="right: 0px !important ;">
    <?php echo ($massage['success_massage']); ?>
</div>
<?php } ?>



<?php

} ?>

<script>
const header = document.querySelector('.header-warrper');
window.addEventListener('scroll', () => {

    window.scrollY === 0 ? header.classList.add('header_top') : header.classList.remove('header_top')
});
let msg = document.getElementById('timing_massage');

console.log(msg)
setTimeout(() => {
    msg.animate([
        // keyframes
        {
            transform: 'translateX(0px)'
        },
        {
            transform: 'translateX(-300px)'
        }
    ], {
        // timing options
        duration: 1000,
        iterations: Infinity
    });
    setTimeout(() => {
        msg.classList.add('hidden');
        msg.style.display = 'none';
    }, 1000)
}, 4000)
</script>