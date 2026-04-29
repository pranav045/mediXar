const fs = require('fs');
const path = require('path');

function walkDir(dir, callback) {
    fs.readdirSync(dir).forEach(f => {
        let dirPath = path.join(dir, f);
        let isDirectory = fs.statSync(dirPath).isDirectory();
        isDirectory ? walkDir(dirPath, callback) : callback(path.join(dir, f));
    });
}

walkDir('resources/views', function(filePath) {
    if (filePath.endsWith('.blade.php')) {
        let content = fs.readFileSync(filePath, 'utf8');
        
        // Desktop/Mobile main logo (w-8 h-8)
        content = content.replace(
            /<div class="w-8 h-8 rounded-lg bg-gradient-to-br from-teal-400 to-emerald-500 flex items-center justify-center shadow-\[0_0_15px_rgba\(45,212,191,0\.5\)\]( group-hover:shadow-\[0_0_25px_rgba\(45,212,191,0\.8\)\] transition-all)?">\s*<svg class="w-5 h-5 text-\[#050b09\]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2\.5">\s*<path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" \/>\s*<\/svg>\s*<\/div>/g, 
            '<img src="{{ Vite::asset(\'resources/img/medixar_logo.png\') }}" class="h-8 w-auto rounded-lg shadow-[0_0_15px_rgba(45,212,191,0.5)]$1">'
        );
        
        // Auth views main logo (w-10 h-10)
        content = content.replace(
            /<div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-400 to-emerald-500 flex items-center justify-center shadow-\[0_0_15px_rgba\(45,212,191,0\.5\)\]">\s*<svg class="w-6 h-6 text-\[#050b09\]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2\.5">\s*<path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" \/>\s*<\/svg>\s*<\/div>/g, 
            '<img src="{{ Vite::asset(\'resources/img/medixar_logo.png\') }}" class="h-10 w-auto rounded-xl shadow-[0_0_15px_rgba(45,212,191,0.5)]">'
        );
        
        // Footer logo (w-5 h-5)
        content = content.replace(
            /<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" \/><\/svg>/g, 
            '<img src="{{ Vite::asset(\'resources/img/medixar_logo.png\') }}" class="h-5 w-auto rounded">'
        );

        fs.writeFileSync(filePath, content);
    }
});
console.log("Logo replaced successfully.");
