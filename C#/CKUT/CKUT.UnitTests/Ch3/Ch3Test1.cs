using NUnit.Framework;
using CKUT.Core.Services.Ch3.No3;
using FluentAssertions;

namespace CKUT.UnitTests.Ch3
{
    [TestFixture]
    public class Ch3Test1
    {
        private string _fileName;

        [Test]
        public void LogAnalyzer_Should_Support_TxtFile()
        {
            GivenFileName();
            var logAnalyer = new LogAnalyzer();
            logAnalyer.IsValidFileName(_fileName).Should().Be(true);
        }

        private void GivenFileName()
        {
            _fileName = "1.txt";
        }
    }
}