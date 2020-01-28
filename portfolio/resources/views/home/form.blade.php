<div class="form-group {{ $errors->has('title_1') ? 'has-error' : ''}}">
    <label for="title_1" class="control-label">{{ 'Title 1' }}</label>
    <input class="form-control" name="title_1" type="text" id="title_1" value="{{ isset($home->title_1) ? $home->title_1 : ''}}" >
    {!! $errors->first('title_1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title_2') ? 'has-error' : ''}}">
    <label for="title_2" class="control-label">{{ 'Title 2' }}</label>
    <input class="form-control" name="title_2" type="text" id="title_2" value="{{ isset($home->title_2) ? $home->title_2 : ''}}" >
    {!! $errors->first('title_2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('facebook_link') ? 'has-error' : ''}}">
    <label for="facebook_link" class="control-label">{{ 'Facebook Link' }}</label>
    <input class="form-control" name="facebook_link" type="text" id="facebook_link" value="{{ isset($home->facebook_link) ? $home->facebook_link : ''}}" >
    {!! $errors->first('facebook_link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('linkedin_link') ? 'has-error' : ''}}">
    <label for="linkedin_link" class="control-label">{{ 'Linkedin Link' }}</label>
    <input class="form-control" name="linkedin_link" type="text" id="linkedin_link" value="{{ isset($home->linkedin_link) ? $home->linkedin_link : ''}}" >
    {!! $errors->first('linkedin_link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('instagram_link') ? 'has-error' : ''}}">
    <label for="instagram_link" class="control-label">{{ 'Instagram Link' }}</label>
    <input class="form-control" name="instagram_link" type="text" id="instagram_link" value="{{ isset($home->instagram_link) ? $home->instagram_link : ''}}" >
    {!! $errors->first('instagram_link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('twiter_link') ? 'has-error' : ''}}">
    <label for="twiter_link" class="control-label">{{ 'Twiter Link' }}</label>
    <input class="form-control" name="twiter_link" type="text" id="twiter_link" value="{{ isset($home->twiter_link) ? $home->twiter_link : ''}}" >
    {!! $errors->first('twiter_link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image">
    <input class="form-control" name="oldImage" type="hidden" id="image" value="{{ isset($home->image) ? $home->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('background') ? 'has-error' : ''}}">
    <label for="background" class="control-label">{{ 'Background' }}</label>
    <input class="form-control" name="background" type="file" id="background">
    <input class="form-control" name="oldBackground" type="hidden" id="background" value="{{ isset($home->background) ? $home->background : ''}}" >
    {!! $errors->first('background', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
