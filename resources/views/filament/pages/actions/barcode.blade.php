@php
$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
$barcodeData = $record->barcode ?? $record->sku;
@endphp

<div class="flex flex-col items-center justify-center p-4 space-y-4">
    <div class="text-lg font-bold">{{ $record->name }}</div>
    <img src="data:image/png;base64,{{ base64_encode($generator->getBarcode($barcodeData, $generator::TYPE_CODE_128)) }}" alt="Barcode">
    <div class="text-sm text-gray-500">{{ $barcodeData }}</div>
</div>