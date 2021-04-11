
using CKUT.Core.Models.Sample;

namespace CKUT.Core.Services.Sample
{
    public interface ICalculatorService
    {
        decimal Calculate(InputDetail inputDetail);
    }
}