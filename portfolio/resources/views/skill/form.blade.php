<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($skill->name) ? $skill->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parcantage') ? 'has-error' : ''}}">
    <label for="parcantage" class="control-label">{{ 'Parcantage' }}</label>
    <input class="form-control" name="parcantage" type="text" id="parcantage" value="{{ isset($skill->parcantage) ? $skill->parcantage : ''}}" >
    {!! $errors->first('parcantage', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
