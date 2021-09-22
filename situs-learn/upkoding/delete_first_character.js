const hy = 'upkoding good game for your coding'
const newNilai = hy.split(' ')
let data = []
newNilai.forEach(ha => {
    data.push(ha.slice(1));
})
console.log(data.join(' '));