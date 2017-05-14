<div class="h_search">
    <form action="/goods/list">
        <input id="searchinput" name="search" value="@if (!empty($search)) {{ $search }} @endif" type="text" placeholder="请输入搜索关键字">
        <span id="searchbtn" type="submit"></span>
    </form>
</div>