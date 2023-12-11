    <script>
    function showContent(contentType) {
    document.getElementById('youtube-content').style.display = 'none';
    document.getElementById('instagram-content').style.display = 'none';
    document.getElementById('facebook-content').style.display = 'none';
    document.getElementById('schedule-content').style.display = 'none';

    document.getElementById('youtube').classList.remove('tablet:bg-brand');
    document.getElementById('instagram').classList.remove('tablet:bg-brand');
    document.getElementById('facebook').classList.remove('tablet:bg-brand');
    document.getElementById('schedule').classList.remove('tablet:bg-brand');

    document.getElementById(`${contentType}-content`).style.display = 'block';

    document.getElementById(contentType).classList.add('tablet:bg-brand');
    }
    </script>