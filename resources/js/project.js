document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.project-card .btn');

    buttons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault(); 
            
            const card = this.closest('.project-card');
            const title = card.querySelector('h5').textContent;
            const desc = card.querySelector('p').textContent;

            createDynamicModal(title, desc);
        });
    });

    function createDynamicModal(title, desc) {
        const oldModal = document.getElementById('dynamic-project-modal');
        if (oldModal) oldModal.remove();

        // Menggunakan class dari app.css kamu (.project-info-overlay dan .project-info-content)
        const modalHtml = `
            <div id="dynamic-project-modal" class="project-info-overlay">
                <div class="project-info-content">
                    <span class="close-info">&times;</span>
                    <div class="info-header">
                        <h2>${title}</h2>
                    </div>
                    <div class="info-body">
                        <p style="line-height:1.6; opacity:0.9;">${desc}</p>
                        <hr style="border-color:rgba(255,255,255,0.1)">
                        <button class="btn btn-outline-light btn-sm w-100 close-btn-action">Close Details</button>
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', modalHtml);

        const modalElement = document.getElementById('dynamic-project-modal');
        const closeActions = modalElement.querySelectorAll('.close-info, .close-btn-action');
        
        const closeModal = () => modalElement.remove();

        closeActions.forEach(el => el.onclick = closeModal);
        modalElement.onclick = (e) => {
            if(e.target.id === 'dynamic-project-modal') closeModal();
        };
    }
});