<div id="loader"
    style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; background: rgba(0, 0, 0, 0.2); z-index: 1000; display: flex;">
    <div class="loader"></div>
</div>

<style>
    #loader {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loader {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #091e7a;
        box-shadow: 32px 0 #091e7a, -32px 0 #091e7a;
        position: relative;
        animation: flash 0.45s ease-in infinite alternate;
    }

    .loader::before,
    .loader::after {
        content: '';
        position: absolute;
        left: -64px;
        top: 0;
        background: rgb(9, 30, 123);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        transform-origin: 35px -35px;
        transform: rotate(45deg);
        animation: hitL 0.45s ease-in infinite alternate;
    }

    .loader::after {
        left: 64px;
        transform: rotate(-45deg);
        transform-origin: -35px -35px;
        animation: hitR 0.45s ease-out infinite alternate;
    }

    @keyframes flash {

        0%,
        100% {
            background-color: rgba(9, 30, 123, 0.25);
            box-shadow: 32px 0 rgba(9, 30, 123, 0.25), -32px 0 rgba(9, 30, 123, 0.25);
        }

        25% {
            background-color: rgba(9, 30, 123, 0.25);
            box-shadow: 32px 0 rgba(9, 30, 123, 0.25), -32px 0 rgba(9, 30, 123, 1);
        }

        50% {
            background-color: rgba(9, 30, 123, 1);
            box-shadow: 32px 0 rgba(9, 30, 123, 0.25), -32px 0 rgba(9, 30, 123, 0.25);
        }

        75% {
            background-color: rgba(9, 30, 123, 0.25);
            box-shadow: 32px 0 rgba(9, 30, 123, 1), -32px 0 rgba(9, 30, 123, 0.25);
        }
    }

    @keyframes hitL {
        0% {
            transform: rotate(45deg);
            background-color: rgba(9, 30, 123, 1);
        }

        25%,
        100% {
            transform: rotate(0deg);
            background-color: rgba(9, 30, 123, 0.25);
        }
    }

    @keyframes hitR {

        0%,
        75% {
            transform: rotate(0deg);
            background-color: rgba(9, 30, 123, 0.25);
        }

        100% {
            transform: rotate(-45deg);
            background-color: rgba(9, 30, 123, 1);
        }
    }

    body.loading {
        overflow: hidden;
    }
</style>

<script>
    // Show loader on page load
    document.addEventListener('DOMContentLoaded', function() {
        document.body.classList.add('loading');
    });

    // Hide the loader when the load ends
    window.addEventListener('load', function() {
        document.getElementById('loader').style.display = 'none';
        document.body.classList.remove('loading');
    });
</script>
