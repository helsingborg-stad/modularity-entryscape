<!-- Search -->

<div data-entryscape="datasetFacetSearchLayout" 
    data-entryscape-include-data-preview="false" 
    data-entryscape-break="1024px">
</div>

<!-- <div data-entryscape="datasetView"></div> -->

<!-- Scripts -->
<script src="https://static.entryscape.com/blocks/0.20/ext/opendata-sv.js"></script>

<!-- Styles -->
<style>
    .entryPagination {
        padding: 0;
    }
    .entryPagination .pagination {
        margin: 16px;
        display: flex;
        gap: 8px;
    }
    .entryPagination .page-item {
        border: none; 
        margin: 0;
        padding: 0;
    }

    .entryPagination .page-link {
        will-change: filter;
        transition: filter .2s ease-in-out;
        filter: var(--drop-shadow-1,drop-shadow(0 calc(4px*var(--drop-shadow-amount, 1)) calc(6px*var(--drop-shadow-amount, 1)) rgba(0,0,0,.3));

        letter-spacing: .1em;
        padding-left: calc(var(--base, 8px)*2);
        padding-right: calc(var(--base, 8px)*2);
        font-size: .775em;
        border-radius: var(--c-button-border-radius-small,var(--radius-sm,calc(var(--base, 8px)/2));
        height: calc(var(--base, 8px)*1.5*2 + var(--base, 8px)*1.5);

        background-color: var(--c-button-color,var(--color-default,#f5f5f5);
        color: var(--c-button-color-contrasting,var(--color-default-darker,#3d3d3d);

        border: none; 
        margin: 0;
        line-height: 1;
    }
    .entryPagination .page-link:not(:disabled) {
        background-color: var(--c-button-primary-color,var(--color-primary,#ae0b05);
        color: var(--c-button-primary-color-contrasting,var(--color-primary-contrasting,var(--color-white,#fff));
    }

    .entryPagination .page-text {
        padding: 0 calc(var(--base, 8px)*2); 
        margin: 0; 
    }

</style>


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
                templateFilter: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetResults"); ?>',
                templateNoFilter: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetResults"); ?>',
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
                listplaceholder: '<?php echo modularity_entryscape_render_blade_view("dataset.notice", ["title" => "Inga resultat", "message" => "Inga dataset matchar kriterierna du angav."]); ?>',
                expandTooltip: 'Mer information',
                unexpandTooltip: 'Mindre information',
                clickExpand: false,
                define: 'datasetlist',
                filterPredicates: 'dcterms:title,dcterms:description,dcterms:publisher,dcat:theme,dcat:keyword',
                rowhead: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetListRowHead"); ?>',
                rowexpand: '',
                listbody: '<?php echo modularity_entryscape_render_blade_view("dataset.datasetListBody"); ?>',
                layout: 'raw'
            }
        ]
    }]);
</script>

<script src="https://static.entryscape.com/blocks/0.20/app.js"></script>