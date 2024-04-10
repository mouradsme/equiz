<div class="form-group row align-items-center" :class="{'has-danger': errors.has('question'), 'has-success': fields.question && fields.question.valid }">
    <label for="question" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.question') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.question" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('question'), 'form-control-success': fields.question && fields.question.valid}" id="question" name="question" placeholder="{{ trans('admin.question.columns.question') }}">
        <div v-if="errors.has('question')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('question') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('right_answer'), 'has-success': fields.right_answer && fields.right_answer.valid }">
    <label for="right_answer" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.right_answer') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.right_answer" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('right_answer'), 'form-control-success': fields.right_answer && fields.right_answer.valid}" id="right_answer" name="right_answer" placeholder="{{ trans('admin.question.columns.right_answer') }}">
        <div v-if="errors.has('right_answer')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('right_answer') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer_2'), 'has-success': fields.answer_2 && fields.answer_2.valid }">
    <label for="answer_2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.answer_2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.answer_2" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('answer_2'), 'form-control-success': fields.answer_2 && fields.answer_2.valid}" id="answer_2" name="answer_2" placeholder="{{ trans('admin.question.columns.answer_2') }}">
        <div v-if="errors.has('answer_2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer_2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer_3'), 'has-success': fields.answer_3 && fields.answer_3.valid }">
    <label for="answer_3" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.answer_3') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.answer_3" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('answer_3'), 'form-control-success': fields.answer_3 && fields.answer_3.valid}" id="answer_3" name="answer_3" placeholder="{{ trans('admin.question.columns.answer_3') }}">
        <div v-if="errors.has('answer_3')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer_3') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer_4'), 'has-success': fields.answer_4 && fields.answer_4.valid }">
    <label for="answer_4" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.answer_4') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.answer_4" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('answer_4'), 'form-control-success': fields.answer_4 && fields.answer_4.valid}" id="answer_4" name="answer_4" placeholder="{{ trans('admin.question.columns.answer_4') }}">
        <div v-if="errors.has('answer_4')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer_4') }}</div>
    </div>
</div>


