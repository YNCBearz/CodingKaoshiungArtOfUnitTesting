using CKUT.Core.Models.Sample;

namespace CKUT.Core.Services.Sample
{
    internal interface ICalculator
    {
        public decimal Calculate(InputDetail inputDetail);
    }
}