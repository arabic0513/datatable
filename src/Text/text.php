<?php

namespace App\Text;


use Illuminate\Support\Facades\Http;

class text {

    public function language_button($tableTitle)
    {
        $copy = '<i class="fas fa-copy"></i>';
        $excel = '<i class="fas fa-file-excel"></i>';
        $pdf = '<i class="fas fa-file-pdf"></i>';
        $print = '<i class="fas fa-print"></i>';
        $eye = '<i class="fas fa-eye"></i>';
        return "buttons: {
                buttons: [
                    { extend: 'copyHtml5',
                        text: '$copy',
                        title: '$tableTitle',
                        titleAttr: 'Скопировать в буфер обмена',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'excelHtml5',
                        text: '$excel',
                        title: '$tableTitle',
                        titleAttr: 'Экспорт в Excel',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'pdfHtml5',
                        text: '$pdf',
                        title: '$tableTitle',
                        titleAttr: 'Экспорт в PDF',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'print',
                        text: '$print',
                        title: '$tableTitle',
                        titleAttr: 'Распечатать',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                            format:{
                                header: function ( data, columnIdx ) {
                                    if(typeof export_format === 'function')
                                        return export_format(data, columnIdx);
                                    return data;
                                }
                            }
                        },
                    },
                    { extend: 'colvis',
                        text: '$eye',
                        titleAttr: 'Показать/скрыть колонки',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible',
                        },
                    }
                ],
                dom: {
                    button: {
                        className: 'dt-button'
                    }
                }
            },";
    }
    public function language(string $language = 'en-GB') : string
    {
        return Http::get("https://cdn.datatables.net/plug-ins/1.13.1/i18n/$language.json");
    }

}
