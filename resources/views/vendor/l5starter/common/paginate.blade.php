{!! with(new L5Starter\Core\Helpers\PaginationHelper($object->setPath('')->appends(Request::except('page'))))->render() !!}