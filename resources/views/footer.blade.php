<footer id="main-footer" class="grid">
    <div>
        <h1 id="footer-text">Kenshi State University</h1>
        @php
            $currentYear = (new \DateTimeImmutable())->setTimestamp(\microtime(true))->format('Y');
            echo'<i class="fas fa-copyright fa-sm"> ' . $currentYear .  ' All Rights Reserved.</i>';
        @endphp
    </div>
</footer>
