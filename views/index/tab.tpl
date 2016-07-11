{extends file='../layout/main.tpl'}

{block name=body}
<div class="jumbotron">
    <h1>Congratulations!</h1>
    <p class="lead">You have successfully created your Yii-powered application.</p>
    <div class="body-content">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified nav-pills" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home">1...</div>
            <div role="tabpanel" class="tab-pane fade" id="profile">2...</div>
            <div role="tabpanel" class="tab-pane fade" id="messages">3...</div>
            <div role="tabpanel" class="tab-pane fade" id="settings">4...</div>
        </div>
    </div>
</div>
{/block}

