<div id="messages">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
            <span data-count="5" class="badge badge-danger badge-counter">5+</span>


    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
        Message Center
        </h6>
        <div id="message-items">

        </div>
        <a class="dropdown-item text-center small text-gray-500" href="{{route('message.index')}}">Read More Messages</a>
    </div>
</div>


@push('scripts')
<script type="text/javascript">
</script>
@endpush

