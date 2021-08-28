<div class="drawer-container">
    <div class="position-absolute drawer" id="drawer">
        <div class="position-relative">
            <div class="position-absolute d-flex justify-content-center align-items-center" onclick="drawer()"
                 style="height: 3rem; width: 3rem; left: -3rem; background-color:white; font-size: 1rem; cursor: pointer;">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <ul class="list-group">
            @foreach(range(1, 10) as $item)
                <li class="list-group-item">Hello world</li>
            @endforeach
        </ul>
    </div>
</div>
