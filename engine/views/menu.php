<?php if ($isAuth): ?>
    Привет, <?= $userName ?> <a href="/?c=auth&a=logout">Выйти</a>
<?php else: ?>
    <form action="/?c=auth&a=login" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="pass" placeholder="password">
        <span>Save</span><input type="checkbox" name="save">
        <button type="submit" name="submit">Войти</button>
    </form>
<?php endif; ?><br>
<a href="/">Главная</a>
<a href="/?c=product">Каталог</a>
<a href="/?c=cart">Корзина</a>
<?php if ($isAdmin): ?>
    <a href="/?c=admin">Админка</a>
<?php endif; ?>
<br>
