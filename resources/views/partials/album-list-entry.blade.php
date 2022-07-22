<div style="display: flex; gap: 15px; margin:20px 55px;">
    <a href="{{ $URL }}">
        <img src="{{ $image }}" alt="{{ $name }} - {{ $artist }}" width="110" height="100" >


    <div style="flex-grow: 1;">
        <div style = "font-size: 300%;">
            <a href="{{ $URL }}">{{ $name }} - {{ $artist }}</a>
        </div>

        <div style="font-size: 200%; display: flex; justify-content: space-between; vertical-align:middle; color: white; " >
            <div>£{{ $price }}</div>
            <div>{{ $release_date }} | Cat no: {{ $catalogue_number }}</div>
        </div>
    </a>
    </div>
</div>