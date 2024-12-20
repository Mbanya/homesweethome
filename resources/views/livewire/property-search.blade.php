<div>
    <section class="inner-project-area project-style-two section-pb-140">
        <div class="container custom-container">
            <div class="project-top-meta mb-50">
                <form wire:submit.preven="render">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-grp">
                                <input type="text" wire:model.live.debounce.500ms="title"  placeholder="Search by project name...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-grp select">
                                        <select id="houseType" wire:model.live="houseType"  name="select" class="form-select" aria-label="Default select example">
                                            <option value="all">All House Types</option>
                                            @foreach($housetypes as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp select">
                                        <select id="saleType" name="select" class="form-select"  wire:model.live="saleType" aria-label="Default select example">
                                            <option value="all">All Sale Types</option>
                                            @foreach($saletypes as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp select">
                                        <select id="city" name="select" class="form-select" wire:model.live="city" aria-label="Default select example">
                                            <option value="all">All Locations</option>
                                            @foreach($locations as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <button type="button" class="btn" wire:click="resetFilters">Reset <i class="fas fa-refresh"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="project-item-wrap">
                <div class="row justify-content-center">
                    @forelse($properties as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="{{route('properties.show',$item)}}"><img src="{{asset(Storage::url($item->banner_image))}}" alt=""></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="{{route('properties.show',$item)}}">{{$item->title}}</a></h3>
                                    <span>{{$item->city->name}} {{$item->address_1}}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="project-item">
                                <div class="project-content">
                                    <h3 class="title"><a href="">No Properties</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforelse

                </div>
            </div>
            {{$properties->links()}}


        </div>
    </section>
</div>
