<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="submit" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-header">
                <h4 class="modal-title" id="searchModalLabel">
                    {{trans('website.nav.search')}}
                </h4>
            </div>
            <div class="modal-body">
                <form method="GET" action="{{route('website.search')}}" siq_id="autopick_7098">
                    <div class="form-row">
                        <div class="form-group col-lg-9">
                            <label for="searchInput" class="sr-only">{{trans('website.nav.search')}}</label>
                            <input autofocus="" type="search" name="keyword" class="form-control" id="searchInput" value="" placeholder="{{trans('website.thing')}}">
                        </div>
                        <div class="form-group col-lg-3">
                            <button type="submit" class="btn btn-brand-primary btn-block">{{trans('website.search_now')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

