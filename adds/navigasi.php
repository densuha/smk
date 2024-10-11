<nav>
        <ul class="pagination justify-content-center">
          <?php if ($halamanAktif > 1) : ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo ($halamanAktif - 1); ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
          <?php endif; ?>

          <?php for ($i = 1; $i <= $totalHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
              <li class="page-item active"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php else : ?>
              <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
          <?php endfor; ?>

          <?php if ($halamanAktif < $totalHalaman) : ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo ($halamanAktif + 1); ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
      