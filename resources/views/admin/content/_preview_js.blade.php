<script>
function setupImagePreviews(root) {
    (root || document).querySelectorAll('input[type="file"][accept^="image"]').forEach(function(input) {
        if (input.dataset.previewBound) return;
        input.dataset.previewBound = '1';

        // Create preview container
        const wrap = document.createElement('div');
        wrap.className = 'upload-preview-wrap';
        const label = document.createElement('span');
        label.className = 'preview-label';
        label.textContent = 'Preview:';
        const img = document.createElement('img');
        wrap.appendChild(label);
        wrap.appendChild(img);
        input.parentNode.insertBefore(wrap, input.nextSibling);

        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) {
                wrap.classList.remove('active');
                return;
            }
            const reader = new FileReader();
            reader.onload = function(ev) {
                img.src = ev.target.result;
                wrap.classList.add('active');
            };
            reader.readAsDataURL(file);
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    setupImagePreviews();
    // Re-scan when details elements open (for edit forms inside collapsible sections)
    document.querySelectorAll('details').forEach(function(d) {
        d.addEventListener('toggle', function() {
            if (d.open) setupImagePreviews(d);
        });
    });
});
</script>
