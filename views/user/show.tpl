{extends file='../layout/main.tpl'}

{block name=body}
<div class="jumbotron">
    <h1>Add User</h1>
    <p class="lead">give me your name and password.</p>
    <div class="body-content">
        <form class="form-horizontal" action="/index.php/user/add" method="post">
            <input name="_csrf" type="hidden" id="_csrf" value="{$csrfToken}">
            <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Add</button>
            </div>
            </div>
        </form>
    </div>
</div>
{/block}
