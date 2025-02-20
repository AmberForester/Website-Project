<script>
    // Fungsi untuk mengatur opsi SweetAlert berdasarkan tema sistem
    function getSwalOptions(icon, title, text) {
        const htmlStyle = document.documentElement.getAttribute('data-style');
        const isDarkMode = htmlStyle === 'dark' || (htmlStyle !== 'light' && window.matchMedia(
            '(prefers-color-scheme: dark)').matches);

        return {
            icon: icon,
            title: title,
            text: text,
            confirmButtonColor: 'var(--theme-default)',
            background: isDarkMode ? '#262932' : '#fff',
            color: isDarkMode ? '#b2b2c4' : '#000',
        };
    }
</script>

@if (session('success'))
    <script>
        Swal.fire(getSwalOptions('success', 'Success!', '{{ session('success') }}'));
    </script>
@elseif (session('error'))
    <script>
        Swal.fire(getSwalOptions('error', 'Error!', '{{ session('error') }}'));
    </script>
@endif
@if (session('info'))
    <script>
        Swal.fire(getSwalOptions('info', 'Info!', '{{ session('info') }}'));
    </script>
@endif
@if (session('warning'))
    <script>
        Swal.fire(getSwalOptions('warning', 'Warning!', '{{ session('warning') }}'));
    </script>
@endif

@if ($errors->any())
    <script>
        const errorHtml = `
            <ul style="text-align: left; padding: 0 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        `;

        Swal.fire({
            ...getSwalOptions('error', 'Terjadi Kesalahan!', ''),
            html: errorHtml,
        });
    </script>
@endif
