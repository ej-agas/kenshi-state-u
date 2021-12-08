<footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>

    @php
        $currentYear = (new \DateTimeImmutable())->setTimestamp(\microtime(true))->format('Y');
        echo '<strong>Copyright &copy;' . $currentYear . ' <a href="/">KENSHI STATE UNIVERSITY</a>.</strong> All rights reserved.';
    @endphp

</footer>
