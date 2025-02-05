<canvas id="{{ $chartId }}" class="w-full"></canvas>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let delayed
        const ctx = document.getElementById('{{ $chartId }}').getContext('2d')

        const labels = []
        const data = []

        @foreach($chartData as $data)
        @foreach($data as $label => $value)
        labels.push('{{ $label }}')
        data.push({{ $value }})
        @endforeach
        @endforeach

        const weekChart = new Chart(ctx, {
            type: '{{ $chartType }}',
            data: {
                labels: labels,
                datasets: [{
                    label: '{{ $labelName }}',
                    data: data,
                    borderRadius: 6,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                }, animation: {
                    onComplete: () => {
                        delayed = true
                    },
                    delay: (context) => {
                        let delay = 0
                        if (context.type === 'data' && context.mode === 'default' && !delayed) {
                            delay = context.dataIndex * 30 + context.datasetIndex * 100
                        }
                        return delay
                    },
                }
            }
        })
    })
</script>

