<?php
function pagination($page, $num)
{
    if ($page >= 2) {
        echo '
                <li class="page-item">
                    <a class="page-link" href="index.php?page=1">1</a>
                </li>';
    }
    if ($page >= 3) {
        echo '
                <li class="page-item" disabled>
                    <a class="page-link">...</a>
                </li>';
    }
    echo '
                <li class="page-item">
                    <a class="page-link" href="index.php?page=' . $page . '">' . $page . ' </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="index.php?page=' . $page + 1 . '">' . $page + 1 . ' </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="index.php?page=' . $page + 2 . '">' . $page + 2 . ' </a>
                </li>
                <li class="page-item" disabled>
                    <a class="page-link">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="index.php?page=' . $num - 2 . '">' . $num - 2 . ' </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="index.php?page=' . $num - 1 . '">' . $num - 1 . ' </a>
                </li>';
}
