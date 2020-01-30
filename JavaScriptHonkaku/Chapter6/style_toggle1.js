            let bgcolor = ['lavender', 'lemonchiffon', 'khaki', 'whitesmoke', 'wheat'];
            document.addEventListener('DOMContentLoaded', function() {
                let idx = 0;
                let elem = document.getElementById('elem');
                elem.addEventListener('click', function() {
                    this.style.backgroundColor = bgcolor[idx++ % bgcolor.length];
                });
            });
