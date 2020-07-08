<?php 
function sana($date){
  switch($date){
    case '01':
      return 'Yanvar';
      break;
    case '02':
      return 'Fevral';
      break;
    case '03':
      return 'Mart';
      break;
    case '04':
      return 'Aprel';
      break;
    case '05':
      return 'May';
      break;
    case '06':
      return 'Iyun';
      break;
    case '07':
      return 'Iyul';
      break;
    case '08':
      return 'Avgust';
      break;
    case '09':
      return 'Sentabr';
      break;
    case '10':
      return 'Oktabr';
      break;
    case '11':
      return 'Noyabr';
      break;
    case '12':
      return 'Dekabr';
      break;                      
  }
}
?>
    @foreach ($kinderNews as $kinderNew)
    <div class="col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated">
        <div class="blog-entry">
          <a href="{{ route('product.section', ['id' => $kinderNew->id]) }}" class="block-20 d-flex align-items-end hvr-grow" style="background-image: url('/uploads/news/{{ $kinderNew->images }}');">
            <div class="meta-date text-center p-2">
              <span class="day">{{ $kinderNew->updated_at->format('d') }}</span>
              <span class="mos"><?=sana($kinderNew->updated_at->format('m'))?></span>
              <span class="yr">{{ $kinderNew->updated_at->format('Y') }}</span>
            </div>
          </a>
          <div class="text bg-white p-4">
            <h3 class="heading"><a href="#"><?=substr($kinderNew->title, 0, 35)?></a></h3>
            <p><?=substr($kinderNew->desrciption, 0, 40)?></p>
            <div class="d-flex align-items-center mt-4">
              <p class="mb-0"><a href="{{ route('product.section', ['id' => $kinderNew->id]) }}" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
              <p class="ml-auto mb-0">
                {{-- <a href="#" class="mr-2">Admin</a>
                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --}}
              </p>
            </div>
          </div>
        </div>
      </div>

    @endforeach
