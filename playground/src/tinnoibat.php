<?php $tinNB = $t->TinNoiBat(10); ?>

<ul class="middlebar_nav">
    <?php while($rowNB = $tinNB->fetch_assoc()) { ?>
    <li> <a class="mbar_thubnail" href="index.php?p=chitiettin&idTin=<?=$rowNB['idTin']; ?>"><img src="<?=$rowNB['urlHinh'] ?>" onerror="this.src='defaultImg.jpg'"></a> <a class="mbar_title" href="index.php?p=chitiettin&idTin=<?=$rowNB['idTin']; ?>"><?=$rowNB['TieuDe'] ?></a> </li>
    <?php } ?>
</ul>