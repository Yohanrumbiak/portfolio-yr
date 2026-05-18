// resources/js/about.js
document.addEventListener('DOMContentLoaded', function() {
    const circles = document.querySelectorAll('.skill-circle');
    const modal = document.getElementById('skill-modal');
    const closeModal = document.querySelector('.close-modal');

    // Cek apakah elemen ada sebelum menjalankan logika
    if (modal && circles.length > 0) {
        circles.forEach(circle => {
            circle.addEventListener('click', function() {
                // Ambil data dari atribut HTML
                const title = this.getAttribute('data-skill') || 'Skill';
                const start = this.getAttribute('data-start') || '-';
                const end = this.getAttribute('data-end') || '-';
                const logo = this.getAttribute('data-logo') || '';
                const detail = this.getAttribute('data-detail') || 'No detail available.';

                // Isi elemen modal
                document.getElementById('modal-title').innerText = title;
                document.getElementById('modal-start').innerText = start;
                document.getElementById('modal-end').innerText = end;
                document.getElementById('modal-logo').src = logo;
                document.getElementById('modal-detail').innerText = detail;

                // Tampilkan modal
                modal.classList.remove('d-none');
                modal.style.display = 'flex'; 
            });
        });

        // Logika tutup modal
        if (closeModal) {
            closeModal.onclick = () => {
                modal.classList.add('d-none');
                modal.style.display = 'none';
            }
        }

        // Tutup jika klik di area gelap (backdrop)
        window.onclick = (event) => {
            if (event.target === modal) {
                modal.classList.add('d-none');
                modal.style.display = 'none';
            }
        };
    }
});