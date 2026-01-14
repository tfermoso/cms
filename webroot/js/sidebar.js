 document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.querySelector('.sidebar-toggle');
            const sidebar = document.getElementById('sidebar');

            if (toggle && sidebar) {
                toggle.addEventListener('click', function () {
                    sidebar.classList.toggle('open');
                });
            }
        });