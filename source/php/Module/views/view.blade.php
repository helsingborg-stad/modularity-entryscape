<!-- Mountpoint -->
@if($entryscapeViewtype == 'single')
    <div data-entryscape="datasetView"></div>
@else 
    <div data-entryscape="datasetFacetSearchLayout" data-entryscape-include-data-preview="false">
    </div>
@endif

<!-- Scripts -->
<script src="https://static.entryscape.com/blocks/0.20/ext/opendata-sv.js"></script>

<!-- Config -->
<script>
    window.__entryscape_config = (window.__entryscape_config || []).concat([{
        block: 'config',
        entrystore: '{{$entryscapeStore}}/store',
        context: '{{$entryscapeContextId}}',
        clicks: {
            dataset: '{{$entryscapeClickUrl}}/'
        },
        blocks: [
            {
                block: 'datasetView',
                extends: 'template',
                clickExpand: false,
                filterPredicates:'dcterms:title,dcterms:description',
                htemplate: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetView"); ?>',
            },
            {
                block: 'distributionList',
                extends: 'template',
                relation: 'dcat:distribution',
                template: '<?php echo modularity_entryscape_render_blade_view("dataset.collection"); ?>',
            },
            {
                block: 'datasetFacetSearchLayout',
                extends: 'template',
                includeExtras: false,
                includeVisualizations: false,
                includeDataPreview: false,
                template: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetFacetSearchLayout"); ?>',
            },
            {
                block: 'datasetResults',
                extends: 'results',
                use: 'datasetlist',
                live: 'polite',
                templateFilter: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetResults", ['lang' => $lang]); ?>',
                templateNoFilter: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetResults", ['lang' => $lang]); ?>',
            },
            {
                block: 'datasetList',
                extends: 'list',
                rdftype: 'dcat:Dataset',
                facets: true,
                namedclick: 'dataset',
                limit: '10',
                hl: '2',
                registry: false,
                initsearch: true,
                includeExtras: false,
                includeVisualizations: false,
                includeDataPreview: false,
                includeIndicators: false,
                dependencyproperties: 'dcterms:publisher',
                listplaceholder: '<?php echo modularity_entryscape_render_blade_view("dataset.notice", ["message" => $lang->noResults]); ?>',
                expandTooltip: 'Mer information',
                unexpandTooltip: 'Mindre information',
                clickExpand: false,
                define: 'datasetlist',
                filterPredicates: 'dcterms:title,dcterms:description,dcterms:publisher,dcat:theme,dcat:keyword',
                rowhead: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetListRowHead"); ?>',
                rowexpand: true,
                listbody: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetListBody"); ?>',
                layout: 'raw'
            }
        ]
    }]);
</script>

<script src="https://static.entryscape.com/blocks/0.20/app.js"></script>