@extends ('layouts.app')

@section('content')
    <div class="container-fluid py-3">
        <div class="page-header">
            <h1 class="page-title">Steden monitor</h1>
            <div class="page-subtitle">Weergave notitie voor de stad {{ $note->city->naam }}</div> 

            <div class="page-options d-flex">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <a href="{{ route('monitor.dashboard') }}" class="btn btn-outline-secondary">
                            <i class="fe fe-list mr-1"></i> Monitor overzicht
                        </a>

                         <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                            Ga terug <i class="fe fe-chevrons-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-3">
        <div class="row">
            <div class="col-3">{{-- Sidebar --}}
                @include ('monitor.components.backend-sidenav', ['city' => $note->city])
            </div> {{-- /// END sdiebar --}}

            <div class="col-9"> {{-- Content --}}
                <div class="card">
                    <div class="card-body">
                        <h6 class="border-bottom border-gray pb-2 mb-2">[Notitie]: {{ ucfirst($note->titel) }}</h6>
                        <small class="text-secondary">Notitie toegevoegd door {{ $note->author->name }} op {{ $note->created_at->format('d/m/Y') }} onder de stad {{ $note->city->naam }}</small>
                
                        <p class="card-text mt-2">{{ ucfirst($note->beschrijving) }}</p>

                        @if () 
                        @endif
                    </div>
                </div>
            </div> {{-- /// END content --}}
        </div>
    </div>
@endsection