{extends file='../layout/main.tpl'}

{block name=body}
<div class="jumbotron">
    <h1>Add User</h1>
    <p class="lead">give me your name and password.</p>
    <div class="body-content">
        <form class="form-horizontal" action="/user/update" method="post">
            <input name="_csrf" type="hidden" id="_csrf" value="{$csrfToken}">
            <input name="id" type="hidden" value="{$user.id}">
            <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" placeholder="Name" value="{$user.name}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" value="{$user.password}">
                </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
            </div>
        </form>
    </div>
</div>
{/block}
