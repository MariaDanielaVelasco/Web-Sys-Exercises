const strand1 = 'GAGCCTACTAACGGGAT';
const strand2 = 'CATCGTAATGACGGCCT';

function hammingDistance (dna1, dna2 ) {
    if (dna1.length !== dna2.length) {
        return 0;
    }
    let distance = 0;
    for (let i = 0; i < dna1.length; i++) {
        if (dna1 [i] !== dna2[i]) {
            distance++;
        };
    };
    return distance;
};
console.log("DNA strand 1: " + strand1);
console.log("DNA strand 2: " + strand2);
console.log("\nHamming Distance: " + hammingDistance(strand1, strand2));
