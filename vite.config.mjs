import { createViteConfig } from "vite-config-factory";

const entries = {
	"css/modularity-entryscape": "./source/sass/modularity-entryscape.scss",
};

export default createViteConfig(entries, {
	outDir: "assets/dist",
	manifestFile: "manifest.json",
});
